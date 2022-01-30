<?php

namespace App\Actions\Fortify;
date_default_timezone_set('Asia/Kolkata');

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Log;

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
        Log::info($input);
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['string', 'max:255'],
            'dob' => ['string', 'max:255'],
            'gender' => ['string', 'max:255'],
            'occupation' => ['string', 'max:255'],
            'income' => ['string', 'max:255'],
            'family' => ['string', 'max:255'],
            'manglik' => ['string', 'max:255'],
            'occupation2' => ['string', 'max:255'],
            'family2' => ['string', 'max:255'],
            'manglik2' => ['string', 'max:255'],
            'income3' => ['string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'lastName' => $input['lastName'],
            'dob' => $input['dob'],
            'gender' => $input['gender'],
            'occupation' => $input['occupation'],
            'income' => $input['income'],
            'family' => $input['family'],
            'manglik' => $input['manglik'],
            'occupation2' => $input['occupation2'],
            'family2' => $input['family2'],
            'manglik2' => $input['manglik2'],
            'income3' => $input['income3'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
