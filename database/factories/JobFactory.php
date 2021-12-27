<?php

namespace Database\Factories;

use App\Models\District;
use App\Models\Division;
use App\Models\Job;
use App\Models\Union;
use App\Models\Upazila;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $division = Division::all()->random()->id;
        $district = District::where('division_id', $division)->get()->random()->id;
        $upazila = Upazila::where('district_id', $district)->get()->random()->id;
        $union = Union::where('upazila_id', $upazila)->get()->random()->id;
        $es = $this->faker->randomElement(['qaumia', 'general']);
        $type = $this->faker->randomElement(['mosque', 'madrasa']);
        $sex = $this->faker->randomElement(['male', 'female']);
        $bool = $this->faker->boolean();
        $jsc = $this->faker->boolean();
        $ssc = $this->faker->boolean();
        $hsc = $this->faker->boolean();
        return [
            'user_id' => $this->faker->randomElement(User::where('type', 'mosque')->orWhere('type', 'madrasa')->pluck('id', 'id')->toArray()),
            'name' => $this->faker->name('male'),
            'slug' => uniqid('cv-'),
            'phone' =>"017".rand(11111111, 99999999),
            'additional_phone' =>"017".rand(11111111, 99999999),
            'email' => $this->faker->email(),
            'dob' =>now(),
            'type' => $type,
            'sex' => $type==="teacher"?$sex:"male",
            'division_id' => $division,
            'district_id' => $district,
            'upazila_id' => $upazila,
            'union_id' => $union,
            'hafiz' => $this->faker->boolean(55),
            'education_medium' => $this->faker->randomElement(['qaumia', 'general']),
            'daorah' => $es==='qaumia'?$this->faker->boolean():0,
            'jsc' => $es==='general'?$jsc:0,
            'ssc' => $es==='general'?$ssc:0,
            'hsc' => $es==='general'?$hsc:0,
            'max_education' => $this->faker->sentence(11),
            'experience' => $this->faker->sentence(11),
            'majhab' => $this->faker->sentence(11),
            'politics' => $this->faker->sentence(11),
            'pir_muridi' => $this->faker->sentence(11),
            'majar' => $this->faker->sentence(11),
            'tabiz' => $this->faker->sentence(11),
            'milad' => $this->faker->sentence(11),
            'marital_status' => $this->faker->boolean(),
            'location_of_job' => $this->faker->address(),
            'monthly_hadia' => rand(5000, 50000),
            'monthly_leave' =>  rand(1, 9),
            'taking_meal' => $this->faker->sentence(11),
            'staying_place' => $this->faker->sentence(11),
            'maktob' => $type==="imam"?$this->faker->sentence(11):null,
            'khatib' => $type==="imam"?$this->faker->sentence(11):null,
            'muajjin' => $type==="imam"?$this->faker->sentence(11):null,
            'kitab' => $type==="teacher"?$this->faker->sentence(11):null,
            'hafizi' => $type==="teacher"?$this->faker->sentence(11):null,
            'nurani' => $type==="teacher"?$this->faker->sentence(11):null,
            'about' => $this->faker->sentence(22),
            'commitment' => $this->faker->boolean(),
            'status' => 'active',
            'request_status' => $this->faker->randomElement(['pending', 'requested']),
        ];
    }
}
