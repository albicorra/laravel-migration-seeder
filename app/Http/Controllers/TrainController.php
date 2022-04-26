<?php

namespace App\Http\Controllers;

use App\train;
use Illuminate\Http\Request;

class TrainController extends Controller
{

    function index (){
        
        $trains = train::where( 'data_di_partenza', date('y-m-d'))->get();
    
        return view('home', compact('trains'));
    }
}
