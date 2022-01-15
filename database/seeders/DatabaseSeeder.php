<?php

namespace Database\Seeders;

use App\Models\Setup;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {
            $this->command->call('migrate:fresh');
//            $this->command->line("Data cleared, starting from blank database.");
//        }
        DB::table('users')->insert([
            'name'=>'hr alamin',
            'email'=>'hralamin2020@gmail.com',
            'username' => implode('@', explode('@',"hralamin2020@gmail.com", -1)),
            'type'=> 'admin',
            'phone'=> '61065051',
            'profile_photo_path' => 'https://via.placeholder.com/640x480.png/00ddff?text=Admin',
            'password'=>Hash::make('000000')
        ]);
        \App\Models\Setup::factory(1)->create();
        $this->call(DivisionSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(UpazilaSeeder::class);
        $this->call(UnionSeeder::class);

//        $numberOfUser = $this->command->ask('How many users do you need ?', 20);
        \App\Models\User::factory(5)->create(['type'=>'imam']);
        \App\Models\User::factory(5)->create(['type'=>'teacher']);
        \App\Models\User::factory(5)->create(['type'=>'mosque']);
        \App\Models\User::factory(5)->create(['type'=>'madrasa']);
        \App\Models\Cv::factory(10)->create();
        \App\Models\Job::factory(10)->create();
        \App\Models\Blog::factory(10)->create();
    }
}
