<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CreateController extends Controller
{
    public function __invoke(Category $category)
    {
     return view('category.create');
    }
}
