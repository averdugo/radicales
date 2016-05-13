<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Http\Redirector;

class TicketController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(Request $request)
    {
         if (!$request->input('title')) {
            return false;
        }else{
            $event = new Event;
            $event->title=$request->input('title');
            $event->description=$request->input('description');
            $event->fecha=$request->input('fecha');
            $event->status=1;
            $event->user_id=$request->input('user_id');
            if ($request->file('flyer')) {

                $request->file('flyer')->move('flyers/',$request->file('flyer')->getClientOriginalName());
                $event->flyer=$request->file('flyer')->getClientOriginalName();

            }
            $event->save();

            return redirect('index');
        }

       
       
        //
    }
}