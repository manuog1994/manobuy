<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Mail\NewUserReceived;
use Illuminate\Validation\Rule;
use App\Mail\NewUserSendReceived;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

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
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'phone' => 'required',
        ])->validate();
        
        Mail::to('manuelortegagaliano@gmail.com')->send(new NewUserReceived($input));
        Mail::to($input['email'])->send(new NewUserSendReceived($input));

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'phone' => $input['phone'],
        ]);
    }
}
