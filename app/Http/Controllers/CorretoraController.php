<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorretoraController extends Controller
{
    //
    public function home(){
       
        return view('corretora.home');
    }
    public function sobre(){
       
        return view('corretora.sobre');
    }
    public function orcamento(){
       
        return view('corretora.orcamento');
    }       
    public function contato(){
       
        return view('corretora.contato');
    }  
}
