<?php

namespace App\Http\Controllers;

use App\ModelPrimo;
use App\ModelSecondo;
use Illuminate\Http\Request;

class ControllerPrimo extends Controller{
 public function index(){
    $txt = "Tabella Paganti: ";
    $paganti = ModelPrimo::all();
    $ospiti = ModelSecondo::all();
    return view ('home' , compact('txt','paganti','ospiti'));
 }
}
