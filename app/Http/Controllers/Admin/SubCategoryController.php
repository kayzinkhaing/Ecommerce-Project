<?php

namespace App\Http\Controllers\Admin;

use Carbon\Factory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Subcategory;

class SubCategoryController extends Controller
{
    public function index():Factory|View
    {
        $categories=Category::all();
        return view('admin.sub_category.create',compact('categories'));
    }
    public function manage(): Factory|View
    {
        $subcategories=Subcategory::all();
        return view('admin.sub_category.manage',compact('subcategories'));
    }
}
