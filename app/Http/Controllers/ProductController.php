<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('products.index', ['products' => Product::latest()->get()]);
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|numeric|min:0',
            'price' => 'required|decimal:0,2|min:0',
        ]);

        Product::create($data);

        return redirect()->route('product/index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product): View
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|numeric|min:0',
            'price' => 'required|decimal:0,2|min:0',
        ]);

        $product->update($data);

        return redirect()->route('product/index')->with('success', 'Product updated successfully.');
    }

    public function delete(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('product/index')->with('success', 'Product deleted successfully.');
    }
}