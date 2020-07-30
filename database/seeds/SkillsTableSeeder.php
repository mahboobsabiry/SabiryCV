<?php

use Illuminate\Database\Seeder;
use App\Skill;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->delete();

        $records = [
        	[
        		'name'		=> 'Web Design',
        		'percent'	=> '95',
        	],
        	[
        		'name'		=> 'Web Development',
        		'percent'	=> '97',
        	],
        	[
        		'name'		=> 'Laravel',
        		'percent'	=> '98',
        	],
        	[
        		'name'		=> 'PHP',
        		'percent'	=> '88',
        	],
        	[
        		'name'		=> 'Big Data',
        		'percent'	=> '67',
        	],
        ];

        foreach ($records as $record) {
        	Skill::create($record);
        }
    }
}
