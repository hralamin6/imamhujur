<?php

namespace Database\Factories;

use App\Models\Cv;
use App\Models\District;
use App\Models\Division;
use App\Models\Union;
use App\Models\Upazila;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CvFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cv::class;

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
        $type = $this->faker->randomElement(['imam', 'teacher']);
        $sex = $this->faker->randomElement(['male', 'female']);
        $bool = $this->faker->boolean();
        $jsc = $this->faker->boolean();
        $ssc = $this->faker->boolean();
        $hsc = $this->faker->boolean();
        return [
            'user_id' => $this->faker->unique->randomElement(User::where('type', 'imam')->orWhere('type', 'teacher')->pluck('id', 'id')->toArray()),
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
            'profession' => $bool,
            'reason_of_leaving' => $bool==1?$this->faker->sentence(11):null,
            'hafiz' => $this->faker->boolean(55),
            'education_medium' => $this->faker->randomElement(['qaumia', 'general']),
            'daorah' => $es==='qaumia'?$this->faker->boolean():0,
            'jsc' => $es==='general'?$jsc:0,
            'jsc_gpa' => $jsc==1? rand(1, 5):null,
            'ssc' => $es==='general'?$ssc:0,
            'ssc_gpa' => $ssc==1? rand(1, 5):null,
            'hsc' => $es==='general'?$hsc:0,
            'hsc_gpa' => $hsc==1? rand(1, 5):null,
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
