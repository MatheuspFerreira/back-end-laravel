<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts () {
        $products = Product::all();
        return $products;
    }

    public function createNewProduct (Request $request) {
        $newProduct = new Product();

        $newProduct->name = $request->name;
        $newProduct->price = $request->price;
        $newProduct->pricestrike = $request->pricestrike;
        $newProduct->discount = $request->discount;
        $newProduct->stock = $request->stock;
        $newProduct->payment = $request->payment;
        $newProduct->starcondition = $request->starcondition;
        $newProduct->productimg = $request->productimg;
        $newProduct->user_id = $request->user_id;

        $newProduct->save();

        return $newProduct;
        
    }

    public function updateProduct (Request $request, $id) {
        $product = Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->pricestrike = $request->pricestrike;
        $product->discount = $request->discount;
        $product->stock = $request->stock;
        $product->payment = $request->payment;
        $product->starcondition = $request->starcondition;
        $product->productimg = $request->productimg;
        
        $product->save();

        return $product;
        
    }

    public function deleteProduct ($id) {
        $product = Product::find($id);

        if($product) {
            $product->delete();

            return "O produto foi deletado.";


        }else {
            return "O produto não cadastrado.";
            
        };

     
    
    }



}
