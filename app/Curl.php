<?php
namespace App;

/**
 * This is a basic Curl class
 *
 * The purpose of this class is to make GET and POST API calls;
 *
 */

 class Curl {
     protected $key;
     protected $secret;
     protected $data;

     /*
      * This method sets value of the key
      *
      * @param string $key
      */

     public function setKey($key){
         $this->key=$key;
     }
     /*
      * This method sets value of the secret
      *
      * @param string $secret
      */
     public function setSecret($secret){
         $this->secret=$secret;
     }

     /*
      * This method sets data
      *
      * @param array $data
      */
     public function setData($data){
         $this->data=$data;
     }
     
     /*
      * This is GET method.  
      * 
      * @params string $url
      * 
      * @return array
      */

     public function get($url){
         $curl = curl_init();

         if($this->key != null && $this->secret != null){
            curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($curl, CURLOPT_USERPWD, $this->key.":".$this->secret);
         }

         if($this->data != null){
            $srcUrl= sprintf("%s?%s", $url, http_build_query($url));
         }
         curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
         curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
         curl_setopt($curl, CURLOPT_URL, $url);
         curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

         $result = curl_exec($curl);

         // todo create error exeption if result is false

         curl_close($curl);

         return $result;

     }


 }
