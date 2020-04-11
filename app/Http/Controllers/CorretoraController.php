<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardIndex;

class CorretoraController extends Controller
{
    //
    public function home(){
        $cards = cardIndex::all();
        return view('corretora.home',[
            'cartoes' =>$cards
        ]);
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
