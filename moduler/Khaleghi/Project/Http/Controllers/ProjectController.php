<?php

namespace Khaleghi\Project\Http\Controllers;
use  Khaleghi\Project\Models\Project;

class ProjectController
{
    public function index(){

        // todo CategoryRepository
        $projects = project::all();
        // return ('corsesss');
        return view('project::index', compact('projects'));

    }
    public function create(){
        return view('project::create');
    }

}
