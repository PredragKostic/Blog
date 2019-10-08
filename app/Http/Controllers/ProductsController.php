<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Brand;
use App\Http\Requests\CreateProductRequest;
use File;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if(auth()->user()->admin){
            $products = Product::paginate(50);
        }else{
            $products = Product::where('user_id', auth()->user()->id)->paginate(2);
        }
        
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $brands = Brand::where('is_visible', 1)->get();
        return view('admin.products.create', compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $product = new Product();
        $product->user_id = auth()->user()->id;
        $product->title = request('title');
        $product->brand_id = request('brand_id');
        $product->slug = request('slug') ? Str::slug(request('slug')) : Str::slug(request('title'));
        $product->description = request('description');
        $product->image = request()->has('image') ? $product->getImagePath('image') : null;
        $product->views = request('views');
        $product->price = request('price');
        $product->published_at = request('published_at');
        $product->is_visible = request()->has('is_visible');
        
        $product->save();
        return redirect('admin/products');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $product = Product::findOrFail($id);

        if(!auth()->user()->admin || $product->user_id != auth()->user()->id){
            return redirect('admin/products');
        }

        $brands = Brand::where('is_visible', 1)->get();
        
        return view('admin.products.edit', compact('brands', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(CreateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        if(!auth()->user()->admin || $product->user_id != auth()->user()->id){
            return redirect('admin/products');
        }

        $product->user_id = auth()->user()->id;
        $product->title = request('title');
        $product->brand_id = request('brand_id');
        $product->slug = request('slug') ? Str::slug(request('slug')) : Str::slug(request('title'));
        $product->description = request('description');
        if(request()->has('image')){
            File::delete($product->image);
            $product->image = $product->getImagePath('image');

        }

        
        $product->views = request('views');
        $product->price = request('price');
        $product->published_at = request('published_at');
        $product->is_visible = request()->has('is_visible');
        
        $product->save();

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if(!auth()->user()->admin || $product->user_id != auth()->user()->id){
            return redirect('admin/products');
        }

        $product->delete();
        return redirect('admin/products');
    }
    
}
