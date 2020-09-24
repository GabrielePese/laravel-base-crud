<?php

namespace App\Http\Controllers;

use App\ModelPrimo;
use Illuminate\Http\Request;

class ControllerPrimo extends Controller{
 public function index(){
    $txt = "Tabella Paganti: ";
    $paganti = ModelPrimo::all();
    return view ('home' , compact('txt','paganti'));
 }
}
