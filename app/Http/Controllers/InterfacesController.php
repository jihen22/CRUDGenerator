<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterfacesController extends Controller
{
    public function ConfigurationPage(){
        return view ('interfaces.ConfigurationPage');
       }
       public function loging(){
        return view ('interfaces.loging');
       }
       public function Tables(){
        return view ('interfaces.Tables');
       }
       public function smth(){
        return view ('interfaces.smth');
       }
       public function smth2(){
        return view ('interfaces.smth2');
       }
      
}


