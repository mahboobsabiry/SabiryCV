<?php

use App\ClientReview;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('client_reviews')->delete();

        $clients = [
        	[
        		'photo' 	=> 'client-1.jpg',
        		'client_name'	=> 'Akbar Khan Jehani',
        		'client_position'	=> 'Head of Afghanistan Heart Association',
        		'client_says'		=> 'You are the best and clean code writer, I hope you will be a great and professional programmer in the nearest few years.'
        	],
        	[
        		'photo' 	=> 'client-2.jpg',
        		'client_name'	=> 'Rozikhan Fazli',
        		'client_position'	=> 'Self-Employer Programmer',
        		'client_says'		=> 'Milad Sabiry is the best web developer I\'ve ever seen.'
        	],
        	[
        		'photo' 	=> 'client-3.jpg',
        		'client_name'	=> 'Next Person',
        		'client_position'	=> '------',
        		'client_says'		=> 'You are the best and clean code writer, I hope you will be a great and professional programmer in the nearest few years.'
        	]
        ];

        foreach ($clients as $client) {
        	ClientReview::create($client);
        }
    }
}
