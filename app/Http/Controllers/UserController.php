<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Http\Redirector;

class UserController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function login(Request $request)
    {

        if (!$request->input('username')) {
            return redirect('/');
        }
        $user = User::where('username',$request->input('username'))->first();
        if (Hash::check($request->input('password'),$user->password)) {
                $events = Event::where('user_id',$user->id)->get();
                return view('home',['user' => $user,'events' => $events]);

            }else{
                return redirect('/');
            }
      
        

        //
    }
}