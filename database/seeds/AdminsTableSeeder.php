<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        $adminRecords = [
        	[
        		'name' 		=> 'Admin',
        		'type' 		=> 'admin',
        		'mobile' 	=> '+93711481544',
        		'email'		=> 'admin@admin.com',
        		'password'	=> Hash::make('engineer'),
        		'image'		=> '',
        		'status'	=> 1
        	],
        	[
        		'name' 		=> 'Admin 2',
        		'type' 		=> 'admin',
        		'mobile' 	=> '+93780977316',
        		'email'		=> 'admin2@admin.com',
        		'password'	=> Hash::make('engineer'),
        		'image'		=> '',
        		'status'	=> 1
        	],
        	[
        		'name' 		=> 'Sub Admin',
        		'type' 		=> 'subadmin',
        		'mobile' 	=> '+931234434',
        		'email'		=> 'subadmin@admin.com',
        		'password'	=> Hash::make('engineer'),
        		'image'		=> '',
        		'status'	=> 1
        	],
        ];

        foreach ($adminRecords as $key => $record) {
        	Admin::create($record);
        }
    }
}
