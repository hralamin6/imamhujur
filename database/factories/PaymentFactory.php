<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->randomElement(User::pluck('id', 'id')->toArray()),
            'payment_method' => $this->faker->randomElement(['bkash', 'nagad']),
            'amount' => $this->faker->randomElement([50, 80, 100]),
            'phone' =>"017".rand(11111111, 99999999),
            'quantity' =>rand(1, 5),
            'trx_id' => uniqid('ih'),
        ];
    }
}
