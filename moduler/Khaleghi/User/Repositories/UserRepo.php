<?php


namespace Khaleghi\User\Repositories;


use Khaleghi\User\Models\User;

class UserRepo
{
    public function findByEmail($email)
    {
        return User::query()->where('email', $email)->first();
    }
    public function paginate(){
        return User::all();
    }
}
