<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Client extends Model
{
	public static function uniqueID(){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	   	$charactersLength = strlen($characters);
	   	$randomString = '';
	   	for ($i = 0; $i < 24; $i++) {
	    	$randomString .= $characters[rand(0, $charactersLength - 1)];
	   	}
	   	
	   	return $randomString;
	}
    
}
