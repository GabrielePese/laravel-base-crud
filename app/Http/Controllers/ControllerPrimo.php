<?php

namespace App\Http\Controllers;

use App\ModelPrimo;
use Illuminate\Http\Request;

class ControllerPrimo extends Controller{
 public function index(){
    
    $paganti = ModelPrimo::all();
    return view ('home' , compact('paganti'));
 }
}
