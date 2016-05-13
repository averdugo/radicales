<?php

use Illuminate\Database\Seeder;
use Illuminate\Hashing\BcryptHasher;

class UsersTableSeeder extends Seeder
{
    public function run()
    {

        DB::table('users')->insert(
            array(
                'name' => 'Aldo Verdugo',
                'username' => 'mexkline',
                'password'=>(new BcryptHasher)->make('psychedelic'),
                'status'=>1
            )
        );
    }
}
?>