<?php

namespace App\Actions\Fortify;

use App\Models\Cv;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

         $user = User::create([
            'name' => $input['name'],
            'username' => implode('@', explode('@', $input['email'], -1)),
            'type' => $input['type'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
        if($input['type']=='imam' | $input['type']=='teacher'){
             Cv::create([
                'user_id'=> $user->id,
                'slug'=> uniqid('cv-'),
                'email'=> $input['email'],
                'name'=> $input['name'],
                'type'=> $input['type'],
            ]);
        }elseif($input['type']=='mosque' | $input['type']=='madrasa'){
             Job::create([
                 'user_id'=> $user->id,
                 'slug'=> uniqid('job-'),
                 'email'=> $input['email'],
                 'name'=> $input['name'],
                 'type'=> $input['type'],
            ]);
        }
        return $user;
    }
}
