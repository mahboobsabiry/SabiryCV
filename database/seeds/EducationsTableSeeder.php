<?php

use Illuminate\Database\Seeder;
use App\Education;
use Illuminate\Support\Facades\DB;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->delete();

        $records = [
        	[
        		'start_date'	=> '2002',
        		'end_date'		=> '2014',
        		'name'			=> 'HighSchool',
        		'field'			=> 'HighSchool',
        		'place'			=> 'Hazrat Ubai ibn Kaab'
        	],
        	[
        		'start_date'	=> '2015',
        		'end_date'		=> '2018',
        		'name'			=> 'University',
        		'field'			=> 'Computer Science, Software Engineering',
        		'place'			=> 'Kabul University'
        	],
        ];

        foreach ($records as $record) {
        	Education::create($record);
        }
    }
}
