<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Services\ImageService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(protected ProductService $productService,
                                protected ImageService $imageService){}

    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::with('category')->get(),
            'categories' => Category::all(),
        ]);
    }

    public function create()
    {
        return view('admin.products.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $created = $this->productService->create($request);

        $this->imageService->create($created, $request->file('image'));

        return redirect()->route('admin.products');
    }

    public function edit()
    {
        return view();
    }

    public function update(Request $request, Product $product)
    {
        $this->productService->update($product, $request);

        $this->imageService->updateImages($product, $request->file('image'));

        return redirect()->route('admin.products');
    }

    public function destroy(Product $product)
    {
        $this->imageService->deleteImage($product->id);
        $product->delete();
        return redirect()->route('admin.products');
    }
}
