<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.index', compact('products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|unique:products|max:255',
            'price' => 'required|numeric',
            'description' => 'required',
            'category_id' => 'required|numeric',
        ]);

        Product::create($validatedData);
        return redirect('products/')->with('success', 'Product is successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
        {
            $category = $request->get('category');

            $query = Product::query();

            if ($category) {
                $query->whereHas('category', function ($query) use ($category) {
                    $query->where('name', $category);
                });
            }

            $categories = Category::all();
            $products = $query->get();

            return view('products.show', compact('products', 'categories'));
        }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product','categories'));
    }

    public function update(Request $request, Product $product) {
    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->description = $request->input('description');
    $product->category_id = $request->input('category_id');

    $product->update();

    $successMessage = 'Product "' . $product->name . '" is successfully updated';
    return redirect()->route('products.index')->with('success', $successMessage);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        $successMessage = 'Product "' . $product->name . '" is successfully updated';
        return redirect('products/')->with('success', $successMessage);
    }
}
