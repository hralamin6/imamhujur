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
//            $this->command->call('migrate:fresh');
//            $this->command->line("Data cleared, starting from blank database.");
//        }
//        DB::table('users')->insert([
//            'name'=>'Imamhujur',
//            'email'=>'imamhujur0@gmail.com',
//            'username' => implode('@', explode('@',"imamhujur0@gmail.com", -1)),
//            'type'=> 'admin',
//            'phone'=> '01650286494',
//            'email_verified_at' => now(),
//            'profile_photo_path' => 'https://via.placeholder.com/640x480.png/00ddff?text=Admin',
//            'password'=>Hash::make('000000')
//        ]);
//        \App\Models\Setup::factory(1)->create();
//        \App\Models\Cv::factory(1)->create(['user_id'=>1, 'status'=>'inactive']);

//        $this->call(DivisionSeeder::class);
//        $this->call(DistrictSeeder::class);
//        $this->call(UpazilaSeeder::class);
//        $this->call(UnionSeeder::class);

//        $numberOfUser = $this->command->ask('How many users do you need ?', 20);
//        \App\Models\User::factory(20)->create(['type'=>'imam']);
//        \App\Models\User::factory(20)->create(['type'=>'teacher']);
//        \App\Models\User::factory(20)->create(['type'=>'mosque']);
//        \App\Models\User::factory(20)->create(['type'=>'madrasa']);
//        \App\Models\Cv::factory(40)->create();
//        \App\Models\Job::factory(40)->create();


        $this->call(CollegeSeeder::class);
    }
}
