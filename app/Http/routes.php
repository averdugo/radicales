<?php

use App\Client;
use App\Ticket;

use App\Event;
use App\User;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {

    return view('login');
});

$app->get('/index', function () use ($app) {
	$user = User::first();
	$events = Event::where('user_id',$user->id)->get();
    return view('home',['user' => $user,'events' => $events]);
});

$app->get('/eventDestroy/{id}', function ($id) use ($app) {
	$event = Event::find($id);
	$event->delete();
	
	$user = User::where('id',$event->user_id)->first();
	$events = Event::where('user_id',$user->id)->get();
    
    return redirect('index');
});

$app->get('event/{id}',function($id){
	$event = Event::find($id);
	$clients = Client::where('event_id',$event->id)->get();
	$user = User::where('id',$event->user_id)->first();
	return view('event',['user' => $user,'e' => $event,'clients' => $clients]);
});

$app->get('ticket/{serie}',function($serie){
	$ticket = Ticket::find($serie);
	$client = Client::where('unique_id',$serie)->first();
	$event = Event::find($client->event_id);
	return view('ticket',['client' => $client,'e' => $event,'ticket' => $ticket]);
});

$app->get('client/{id}',function($id){
	return Client::find($id);
});

$app->post('login/', 'UserController@login');
$app->post('event/', 'EventController@create');
$app->post('client/', 'ClientController@create');

