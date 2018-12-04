<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorHandlerController extends Controller
{
 
    public function __construct()
    {
        
    }
 
    public function errorCode404()

    {

    	 return response()->json(['status' => 'Success' , 'result' => array('message' => 'Error 404')]);

    }



    public function errorCode405()

    {

    	return response()->json(['status' => 'Success' , 'result' => array('message' => 'Error 405')]);

    }

    public function errorCode500()

    {

    	return response()->json(['status' => 'Success' , 'result' => array('message' => 'Error 500')]);

    }
}
