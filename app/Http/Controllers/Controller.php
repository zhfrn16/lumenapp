<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    
    public function getBarber(){
      $results = app('db')->select("SELECT * FROM barber"); 
    return response()->json($results);
    }

}
