<?php
namespace Khaleghi\Project\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class ACL_RoleController extends Controller
{
    public function index()
    {
        // todo CategoryRepository
        $Users = User::all();
        return view('ACL_RoleController::index', compact('AclRole'));
    }
}
