<?php

namespace App\Http\Controllers;

use App\User;
use App\Card;
use Illuminate\Http\Request;
use Google\Cloud\Translate\TranslateClient;

class HomeController extends Controller
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
    public function index($user)
    {
        $key = exec("gcloud auth application-default print-access-token");
        $user= User::FindorFail($user);
        return view('home',[
            'user'=>$user,
            'key' =>$key,
        ]);


    }

    public function history(){
         $user = auth()->user();
         $c=Card::where('user_id',$user->id)->orderby('created_at', 'DESC')->get();
        return view('history',[
            'c'=>$c,
            'user'=>auth()->user(),
        ]);

    }

}
