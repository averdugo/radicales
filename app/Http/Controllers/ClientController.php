<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Client;
use App\Ticket;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Http\Redirector;

class ClientController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function create(Request $request)
    {
         if (!$request->input('name')) {
            return false;
        }else{
            $random = Client::uniqueID();
            $client = new Client;
            $client->unique_id = $random;
            $client->name=$request->input('name');
            $client->phone=$request->input('phone');
            $client->event_id=$request->input('event_id');
            $client->status=1;
            
            $client->save();

          
            $ticket = new Ticket;
            $ticket->user_id=$client->unique_id;
            $ticket->status=1;
            $ticket->event_id=$request->input('event_id');

            $ticket->save();

            $event = Event::find( $client->event_id);
            $clients = Client::where('event_id',$request->input('event_id'))->get();
            $user = User::where('id',$event->user_id)->first();
            return view('event',['user' => $user,'e' => $event,'clients' => $clients]);
        }

       
       
        //
    }
}