<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception, Log;
use App\Models\Transaction;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Gets the data
     *
     * @return Http Request
     */
    public function index()
    {
       try 
        {
	       	// Get cURL resource
    			$curl = curl_init();
    			// Set some options - we are passing in a useragent too here
    			curl_setopt_array($curl, array(
    			    CURLOPT_RETURNTRANSFER => 1,
    			    CURLOPT_URL => 'http://api.worldbank.org/v2/datacatalog?format=json',
    			    CURLOPT_USERAGENT => 'Api User'
    			));
    			// Send the request & save response to $resp
    			$json = curl_exec($curl);

          $json_obj=json_decode($json);
          $datacat=$json_obj->datacatalog;
          $i=0;
          foreach($datacat as $key => $value) {
              echo $value->id . "<br>";
              $meta=$datacat[$i++]->metatype;
              foreach($meta as $key => $value){
                  //echo $value->id . " : " . $value->value . "<br>";
                $arrayName = array($value->id => $value->value);
                print_r($arrayName);

                  Transaction::create($arrayName);
                  
              }
          }

    			// Close request to clear up some resources
    			curl_close($curl);

       	
       } catch (Exception $e) 
       {
       	   Log::error($e);
       }
    }
}
