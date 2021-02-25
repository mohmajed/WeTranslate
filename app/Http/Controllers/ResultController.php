<?php

namespace App\Http\Controllers;
use App\Card;
use App\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function redirect(Request $r){
        $cid=$r->url();
        $cid=substr($cid,29);
        $c=Card::where('id',$cid)->first();
        if($c->text2 == null){
            return view('wait',[
                'user'=>auth()->user(),
                'c'=>$c,
        ]);
        }
        else{
            
            return view('display',[
                'c'=>$c,
                'user'=>auth()->user(),
        ]);
        }
    }
}
