<?php
namespace Khaleghi\Category\Http\Controllers;

use App\Http\Controllers\Controller;
use Khaleghi\Category\Models\Category;
use Khaleghi\Media\Services\MediaFileService;
use Khaleghi\Category\Http\Requests\CategoryRequest;
use Khaleghi\Category\Repositories\CategoryRepo;

class CategoryController extends Controller
{
    public function index()
    {
        // todo CategoryRepository
        $categories = Category::all();
        return view('Categories::index', compact('categories'));
    }

    public function store(CategoryRequest $request,CategoryRepo $categoryRepo)
    {
        // todo repository
        $request->request->add(['images'=>MediaFileService::upload($request->file('image'))->id]);
        $categoryRepo->store($request);
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
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json(['message' => 'عملیات با موفقیت انجام شد.'], \Illuminate\Http\Response::HTTP_OK);
    }
}
