<?php


namespace Khaleghi\User\Http\Controllers;
use Khaleghi\User\Repositories\UserRepo;

class UserController
{
    public function __construct(UserRepo $userrepo)
    {
        $this->UserRepo = $userrepo;
    }

    public function index()
    {
        $users = $this->UserRepo->paginate();
        return view("User::Admin.index", compact("users"));
    }
}
