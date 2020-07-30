<?php

use Illuminate\Database\Seeder;
use App\MyInfo;
use Illuminate\Support\Facades\DB;

class MyInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_infos')->delete();

        $records = [
        	[
        		'key'	=> 'myName',
        		'value'	=> 'Mahboobulrahman',
        	],
        	[
        		'key'	=> 'myLastName',
        		'value'	=> 'Sabiry',
        	],
        	[
        		'key'	=> 'myPhone',
        		'value'	=> '+93 711 481 544 - +93 780 977 316',
        	],
        	[
        		'key'	=> 'myEmail',
        		'value'	=> 'm.sabiry1997@gmail.com',
        	],
        	[
        		'key'	=> 'myDob',
        		'value'	=> '17 April 1997',
        	],
        	[
        		'key'	=> 'myLangs',
        		'value'	=> 'Uzbeki(Native) - Darie - Pashto - English - Arabic(Sometimes).',
        	],
        	[
        		'key'	=> 'myNationality',
        		'value'	=> 'Afghan - Uzbek',
        	],
        	[
        		'key'	=> 'myInterests',
        		'value'	=> 'Coding, Reading, Studying, Journey',
        	],
        	[
        		'key'	=> 'myProjects',
        		'value'	=> '10',
        	],
            [
                'key'   => 'happyClients',
                'value' => '12',
            ],
            [
                'key'   => 'myAwards',
                'value' => '7',
            ],
            [
                'key'   => 'myAddress',
                'value' => 'Rustaq, Takhar, Afghanistan',
            ],
            [
                'key'   => 'myFacebook',
                'value' => 'https://www.facebook.com/M.Sabiry',
            ],
            [
                'key'   => 'myTwitter',
                'value' => 'https://twitter.com/MSabiryOfficial',
            ],
            [
                'key'   => 'myLinkedIn',
                'value' => 'https://www.linkedin.com/msabiry',
            ],
            [
                'key'   => 'myInstagram',
                'value' => 'https://www.instagram.com/M.Sabiry.Official',
            ],
            [
                'key'   => 'myGithub',
                'value' => 'https://www.github.com/msabiry',
            ],
        ];

        foreach ($records as $record) {
        	MyInfo::create($record);
        }
    }
}
