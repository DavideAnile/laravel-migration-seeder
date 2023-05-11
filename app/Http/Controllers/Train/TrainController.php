<?php

namespace App\Http\Controllers\Train;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

        return view('home')
    }
}
