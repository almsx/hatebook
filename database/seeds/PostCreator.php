<?php

use Illuminate\Database\Seeder;

class PostCreator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Mando llamar a esta sola consulta
    	/*
        DB::table('posts')->insert([
        	'content' => 'soy un puto post',
        	'user_id' => 1
        ]);
        */

        //Manda a llamar todos los post
       	//un model factory :)
       	//DB::table('users')->truncate();
       	//Creare aqui 900 posts :D
       	factory('App\Models\Post', 900)->create();

    }
}
