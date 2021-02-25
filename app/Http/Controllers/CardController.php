<?php

namespace App\Http\Controllers;
use \App\Card;
use Illuminate\Http\Request;
use JoggApp\GoogleTranslate\GoogleTranslate;

class CardController extends Controller
{


    public function translate(Request $r){

        $c=$r->url();
        $cid=substr($c,38);

        $c=Card::where('id',$cid)->first();
        return view('translate',[
            'c'=>$c,
            'user'=>auth()->user(),
    ]);
    }

    public function store(){
        if(isset($_POST['enhance'])){
            $data= request()->validate([
                'text1' => 'required',
                'text2' =>'',
                'text3'=>'',

            ]);

            $c=auth()->user()->cards()->create($data);

            return view('wait',[
                'user'=>auth()->user(),
                'c'=>$c,
            ]);
        }
            



        
    }
}
