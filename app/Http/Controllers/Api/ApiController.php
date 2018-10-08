<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception, Log;

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
		echo $resp = curl_exec($curl);

		// Close request to clear up some resources
		curl_close($curl);

       	
       } catch (Exception $e) 
       {
       	 Log::error($e);
       }
    }
}
