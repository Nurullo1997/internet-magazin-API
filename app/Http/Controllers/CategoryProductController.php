<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index(Category $category)
    {
        return $category->products()->cursorPaginate(25);

      
    }
}
