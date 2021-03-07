<?php


namespace Khaleghi\Category\Repositories;

use App\User as AppUser;
use Khaleghi\Category\Models\Category;

class CategoryRepo 
{
    public function store($values)
    {
        return Category::create
        ([
            'title' => $values->title,
            'slug' => $values->slug,
            'images'=>$values->image,
            'parent_id' => $values->parent_id,
        ]);
    }
    public function paginate(){
        return Category::all();
    }
    public function findByid(){
        
       // return Category::->findOrFail($id);
    }
}
