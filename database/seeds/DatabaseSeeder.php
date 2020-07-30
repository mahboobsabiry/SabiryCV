<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminsTableSeeder::class);
        $this->call(MyInfosTableSeeder::class);
        $this->call(EducationsTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(ClientReviewsTableSeeder::class);
    }
}
