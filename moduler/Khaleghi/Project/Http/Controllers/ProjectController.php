<?php
namespace Khaleghi\Project\Http\Controllers;

use App\Http\Controllers\Controller;
use  Khaleghi\Project\Models\Project;
use Khaleghi\Project\Http\Request\ProjectRequest;


class ProjectController extends Controller
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
    public function store(ProjectRequest $request)
    {
        // todo repository
    
    project::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'dictionary' => $request->dictionary,
            'capital_required' => $request->capital_required,
            'amountMain' => $request->amountMain,
            'AstanQuds' => $request->AstanQuds,
            'position' => $request->position,
            'Phase' => $request->Phase,
            'author' => $request->author,
            'parent_id' => $request->parent_id,
        ]);

        return back();
    }

    public function edit(Project $project)
    {
        // todo CategoryRepository

        return view('project::edit', compact('project'));
    }

    public function update(Project $projects, ProjectRequest $request)
    {
        // todo repository
        $projects->update([
            'name' => $request->title,
            'slug' => $request->slug,
        ]);

        return back();
    }
    public function destroy(Project $projects)
    {
        $projects->delete();

        return response()->json(['message' => 'عملیات با موفقیت انجام شد.'], \Illuminate\Http\Response::HTTP_OK);
    }

}
