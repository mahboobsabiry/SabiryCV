<?php

use Illuminate\Database\Seeder;
use App\Experience;
use Illuminate\Support\Facades\DB;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        DB::table('experiences')->delete();

        $records = [
        	[
        		'start_date'	=> '2018',
        		'end_date'		=> '2019',
        		'name'			=> 'IT Manager',
        		'company'		=> 'Afghanistan Heart Association'
        	],
        	[
        		'start_date'	=> '2017',
        		'end_date'		=> 'Now',
        		'name'			=> 'Software Engineer & Web Developer',
        		'company'		=> 'Self Employement'
        	],
        ];

        foreach ($records as $record) {
        	Experience::create($record);
        }
    }
}
