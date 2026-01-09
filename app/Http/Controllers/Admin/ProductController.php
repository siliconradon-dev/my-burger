<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);
        return Inertia::render('Admin/Product/Index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $categories = Category::where('is_active', true)->get();
        return Inertia::render('Admin/Product/Create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'status' => 'required|string|in:active,draft,out_of_stock',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
            'image' => $imagePath ? '/storage/' . $imagePath : null,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        return Inertia::render('Admin/Product/Edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update logic
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        // TODO: Implement destroy logic
        return redirect()->route('products.index');
    }

    public function stockUpdate(Request $request, $id)
    {
        // TODO: Implement stock update logic
        return back();
    }
}
