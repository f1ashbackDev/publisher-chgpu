<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;

class ProductService
{
    public function create($request)
    {
        try {
            $product = new Product();
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->type = $request->input('type');
            $product->sizes = $request->input('sizes');
            $product->print_type = $request->input('print_type');
            $product->stitching = $request->input('stitching');
            $product->laminating = $request->input('laminating');
            $product->category_id = $request->input('category_id');
            $product->save();
            return $product;
        }
        catch (\Exception $e) {
            return new \Exception($e->getMessage());
        }
    }

    public function update(Product $product, $request)
    {
        try {
            $product->update($request);
            return $product;
        }
        catch (\Exception $e) {
            return new \Exception($e->getMessage());
        }
    }

    //    product update due to deletion of a category
    //    Если категория удаляется мы обновляем это у всех
    public function updateProductCategory(Category $category)
    {
        try{
            $getProducts = Product::where('category_id', '=', $category->id)->get();
            if($getProducts == null) return false;
            foreach ($getProducts as $product) {
                $product->category_id = 1;
                $product->save();
            }
            return true;
        }catch (\Exception $e){
            return new \Exception($e->getMessage());
        }
    }
}
