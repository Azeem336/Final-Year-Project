<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Events\ChatEvent;
use Auth;

class ChatController extends Controller
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


    public function chat(){

    	return view ('chat');
    }

    public function send(request $request)
    {
         return $request->all();
    	$user =User::find(Auth::id());
    	event(new ChatEvent($request->massage,$user));
    }

    // public function send()
    // {

    //    $massage ='allha';
    // 	$user = User::find(Auth::id());
    // 	event(new ChatEvent($massage,$user));
    // }
}
