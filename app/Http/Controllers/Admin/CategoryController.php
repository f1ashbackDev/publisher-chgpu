<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index',[
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->get('name');
        $category->save();
        return redirect()->route('admin.categories');
    }

    public function edit(Category $categories)
    {
        return view('admin.categories.update',[
            'category' => $categories
        ]);
    }

    public function update(Request $request, Category $categories)
    {
        $categories->name = $request->get('name');
        $categories->save();
        return redirect()->route('admin.categories');
    }

    public function destroy(Category $categories)
    {
        $productService = new ProductService();
        $productService->updateProductCategory($categories);
        $categories->delete();
        return redirect()->route('admin.categories');
    }
}
