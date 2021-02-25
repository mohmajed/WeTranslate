<?php

namespace App\Http\Controllers;

use App\User;
use App\Card;
use Illuminate\Http\Request;

class TranslatorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function view(){
        
        $c=Card::where('text2',NULL)->get();
        return view('requests',[
            'c'=>$c,
            'user'=>auth()->user(),
        ]);

     }

     public function submit(Request $r){
        $data= request()->validate([  
            'text2' =>'required', 
        ]);
        $cid=$r->url();
        $cid=substr($cid,29);
        $c=Card::where('id',$cid)->first();
        foreach ($data as $key => $d){
            $c->text2=$d;
        }
        $c->save();
        
        return view('translator',[
            'user'=>auth()->user(),
        ]);
     }

    public function index($user)
    {
        
        $user= User::FindorFail($user);
        return view('translator',[
            'user'=>$user,
        ]);
    }
}
