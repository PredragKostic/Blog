<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\CreateBrandRequest;

class BrandsController extends Controller
{
    
    public function index()
    {
        $brands = Brand::paginate(2);
        return view('admin.brands.index', compact('brands'));
    }

    
    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(CreateBrandRequest $request) {
        $brand = new Brand();
        $brand->title = request('title');
        $brand->slug = request('slug') ? Str::slug(request('slug')) : Str::slug(request('title'));
        $brand->summary = request('summary');
        $brand->is_visible = request()->has('is_visible');
        
        $brand->save();
        return redirect('admin/brands');
    }

    
    
    public function edit($id) {
        $brand = Brand::findOrFail($id);
        return view('admin.brands.edit', compact('brand'));
    }

    
    public function update(CreateBrandRequest $request, $id){
        $brand = Brand::findOrFail($id);
        $brand->title = request('title');
        $brand->slug = request('slug') ? Str::slug(request('slug')) : Str::slug(request('title'));
        $brand->summary = request('summary');
        $brand->is_visible = request()->has('is_visible');
        
        $brand->save();
        return back();
    }

    
    public function destroy($id){
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect('admin/brands');
    }
}
