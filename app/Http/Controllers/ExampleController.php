<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function getBarber(){
      $results = app('db')->select("SELECT * FROM barber"); 
    return response()->json($results);
    }

    //
}
