<?php


namespace Khaleghi\Category\Repositories;

use App\User as AppUser;
use Khaleghi\Category\Models\Category;

class CategoryRepo
{

    public function paginate(){
        return Category::all();
    }
}
