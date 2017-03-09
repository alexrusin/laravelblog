<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Carbon\Carbon;
use App\Curl;
use App\Order;

class ShipDownloaderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'download-shipments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download shipment information from ship station';

    /**
     * The key for Ship Station.
     *
     * @var string
     */
    protected $key;

    /**
     * The secret for Ship Station
     *
     * @var string
     */
    protected $secret;

   

    

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->key = env('SS_KEY');
        $this->secret = env('SS_SECRET');

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
        $reqObj = new Curl();
        $reqObj->setKey($this->key);
        $reqObj->setSecret($this->secret);

       
        $timeNow = Carbon::now();
        $timeBefore = Carbon::now();
        $timeBefore = $timeBefore->subSeconds(3599);
       

        $url = "https://ssapi.shipstation.com/orders?createDateStart=";
        $url .= $timeBefore;
        //$url .="2017-03-01 14:32:27";
        $url .= "&createDateEnd=";
        $url .= $timeNow;
        //$url .="2017-03-01 15:32:27";

        $urlString = str_replace(" ", "T", $url);
        //dd($urlString);

        $orders=$reqObj->get($urlString);
              
       
        if($orders != false){

            $ordersArray=json_decode($orders, true);
            
            if (array_key_exists("orders", $ordersArray) && !empty($ordersArray["orders"])){
                foreach ($ordersArray['orders'] as $order) {
                    $this->insertOrder($order);
                }
                $message = "Total processed orders: ".$ordersArray['total'];
                $this->writeLog($message);
            } else if (array_key_exists("orders", $ordersArray) && empty($ordersArray["orders"])){
                $message = "there were no orders";
                $this->writeLog($message);            
            } else {
                $this->insertOrder($ordersArray);
                $message = "Total processed orders: one";
                $this->writeLog($message);
            }

               
        } else {
            $message = $reqObj->getCurlErr();
            $this->writeLog($message);
        }
    }
   /**
   * Create new order model and save to the databas 
   *
   * @param Array $order
   * 
   * @return void
   **/

    protected function insertOrder($order){
        $dataOrder= new Order;
        $dataOrder->ss_id=$order['orderId'];
        $dataOrder->order_number=$order['orderNumber'];
        $dataOrder->order_date=$order['orderDate'];
        $dataOrder->order_status=$order['orderStatus'];
        $dataOrder->order_json = json_encode($order);
        try {

            $dataOrder->save();
        } catch(QueryException $e){
            $message="Duplicate order with ss_id ".$order['orderId'] . " was skipped";
            $this->writeLog($message);
        }
        
    }

    /**
    * Create log file and write log messages to it
    *
    * @param \Carbon\Carbon $timestamp String $logmessage
    *
    * @return void
    */
    protected function writeLog($logmessage)
    {
        $logfile = fopen("shiplog.txt", "a");
        $txt = Carbon::now()  . ": ";
        $txt .= $logmessage . "\n";
        fwrite($logfile, $txt);
        fclose($logfile);
    }
}
