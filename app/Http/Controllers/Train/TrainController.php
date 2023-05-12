<?php

namespace App\Http\Controllers\Train;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        
        $trains =  Train::where('departure_time', '>=' , now())->get();
        
        //Train::all()->where('departure_time, '>' , date(now()));

        

        return view('home', compact('trains'));
    }
}
