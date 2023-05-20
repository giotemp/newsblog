<?php

namespace App\Actions\Fortify;

use App\Models\Detail;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        $messages = [
            'email.required' => 'Devi inserire il tuo indirizzo email',
            'name.required' => 'Devi insere il tuo username',
            'fullname.required' => 'Devi inserire il tuo nome',
            'fullname.alpha'=> ' Il nome non è valido',
            'password.regex' => 'Deve contenere almeno una lettera maiuscola,minuscola,un humero e un carattere speciale',
        ];
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            //'password' => $this->passwordRules(),
            'password' => [
                'required',
                'string',
                'min:8',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'fullname' => 'required|alpha',
        ],$messages)->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        $role = Role::find(2); // recuper l'utente
        $user->roles()->attach($role);

        Detail::create([
            'fullname' => $input['fullname'],
            'city' => $input['city'],
            'user_id'=>$user->id
        ]);

        return $user;
    }
}
