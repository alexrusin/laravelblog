<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
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
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
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
        $reqObj->setKey('aee799cca7d6432ea2ed7520794ae9f4');
        $reqObj->setSecret('77ff82bf4c884ae081db03118909516e');

       
        $timeNow = Carbon::now();
        $timeBefore = Carbon::now();
        $timeBefore = $timeBefore->subSeconds(3599);
       

        $url = "https://ssapi.shipstation.com/orders?createDateStart=";
        $url .= $timeBefore;
        // $url .="2017-03-01 14:32:27";
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
                echo "saved orders: ".$ordersArray['total'];
            } else if (array_key_exists("orders", $ordersArray) && empty($ordersArray["orders"])){
                echo "there were no orders";            
            } else {
                $this->insertOrder($ordersArray);
            }

               
        } else {
            echo "error.  return is false";
        }
    }
   /**
   * Create new order model and save to the databas 
   *
   **/

    protected function insertOrder($order){
        $dataOrder= new Order;
        $dataOrder->order_number=$order['orderNumber'];
        $dataOrder->order_date=$order['orderDate'];
        $dataOrder->order_status=$order['orderStatus'];
        $dataOrder->order_json = json_encode($order);
        $dataOrder->save();

    }
}
