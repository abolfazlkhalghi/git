<?php

namespace App\Http\Controllers;
use Khaleghi\Category\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Categories = Category::orderBy('id')->get();
        return view('index', compact('Categories'));
    }
}
