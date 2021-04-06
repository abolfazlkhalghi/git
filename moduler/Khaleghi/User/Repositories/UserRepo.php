<?php


namespace Khaleghi\User\Repositories;

use App\User as AppUser;
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
    public function getauther(){
        return User::permission('auther')->get();
    }

}
