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
    public function store(CategoryRequest $request)
    {
        // todo repository
        Category::create([
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

    public function edit(Category $category)
    {
        // todo CategoryRepository
        $categories = Category::where('id', '!=', $category->id)->get();
        return view('Categories::edit', compact('category', 'categories'));
    }

    public function update(Category $category, CategoryRequest $request)
    {
        // todo repository
        $category->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'parent_id' => $request->parent_id,
        ]);

        return back();
    }


}
