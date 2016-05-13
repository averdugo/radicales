<?php

use App\Client;
use App\Ticket;
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
	
    return view('home');
});

$app->get('user/{id}',function($id){
    $client = new Client;
    $client->unique_id = mt_rand();
    $client->email='aldo.vc.1985@gmail.com';
    $client->name='Aldo';
    $client->phone='+56999999';
    $client->save();

    return 'save';
});

$app->post('login/', 'UserController@login');
