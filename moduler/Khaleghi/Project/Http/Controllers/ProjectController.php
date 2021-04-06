<?php
namespace Khaleghi\Project\Http\Controllers;

use App\Http\Controllers\Controller;
use  Khaleghi\Project\Models\Project;
use Khaleghi\Project\Http\Request\ProjectRequest;
use Khaleghi\User\Repositories\UserRepo;
use Khaleghi\Category\Repositories;
use Khaleghi\Category\Repositories\CategoryRepo;
use Khaleghi\Project\Http\Requests\ProjectRequest as RequestsProjectRequest;

class ProjectController extends Controller
{
    public function index(){

        // todo CategoryRepository
        $projects = project::all();
        // return ('corsesss');
        return view('project::index', compact('projects'));

    }
    public function create(UserRepo $userRepo , CategoryRepo $categoriesRepo){
        $authers = $userRepo->getauther();
        $statuss= Project::$status;
        $categories=$categoriesRepo;
        return view('project::create', compact('authers','statuss','categories'));
    }
    public function store(ProjectRequest $Request){

    }
}
