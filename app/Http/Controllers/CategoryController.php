<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category1;

class CategoryController extends Controller
{
    public function index(Category1 $category1)
    {
        return view('categories.index')->with(['posts' => $category1->getByCategory1()]);
    }
}
