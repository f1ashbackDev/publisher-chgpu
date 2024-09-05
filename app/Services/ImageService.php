<?php

namespace App\Services;

use App\Models\ImageProduct;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;
use mysql_xdevapi\Exception;

class ImageService
{
    public function create($product_id, $data)
    {
        try {
            foreach ($data as $image) {
                $path = $image->store('products', 'public');
                $createImage = new ImageProduct();
                $createImage->image = $path;
                $createImage->product_id = $product_id->id;
                $createImage->save();
            }
            return true;
        }
        catch (ModelNotFoundException $exception) {
            throw new ModelNotFoundException($exception->getMessage());
        }
    }

    public function updateImages($product_id, $data)
    {
        try {
            $getImages = ImageProduct::where('product_id', '=', $product_id)->get();
            foreach ($getImages as $image) {
                Storage::delete($image->image);
                $image->delete();
            }
            foreach ($data as $image) {
                $path = $image->store('products', 'public');
                $createImage = new ImageProduct();
                $createImage->image = $path;
                $createImage->product_id = $product_id->id;
                $createImage->save();
            }
            return true;
        }
        catch (ModelNotFoundException $exception) {
            throw new ModelNotFoundException($exception->getMessage());
        }
        catch (\Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }

    public function deleteImage($product_id)
    {
        try {
            $images = ImageProduct::where('product_id', "=",  $product_id)->get();
            if($images == null) return false;
            foreach ($images as $item){
                Storage::disk('public')->delete($item->image);
                $item->delete();
            }
            return true;
        }
        catch (ModelNotFoundException $exception) {
            throw new ModelNotFoundException($exception->getMessage());
        }
    }
}
