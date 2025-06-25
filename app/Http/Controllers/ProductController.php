<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Listado de productos
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    // Formulario para crear
    public function create()
    {
        // Traemos TODAS las categorías para el <select>
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    // Almacenar nuevo producto
    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'price'        => 'required|numeric|min:0.01',
            'description'  => 'nullable|string',
            'category_id'  => 'required|exists:categories,id',
        ]);

        Product::create($request->all());

        return redirect()
            ->route('products.index')
            ->with('success', __('products.created_successfully'));
    }

    // Formulario para editar
    public function edit(Product $product)
    {
        // Traemos TODAS las categorías para el <select>
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    // Actualizar producto
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'price'        => 'required|numeric|min:0.01',
            'description'  => 'nullable|string',
            'category_id'  => 'required|exists:categories,id',
        ]);

        $product->update($request->all());

        return redirect()
            ->route('products.index')
            ->with('success', __('products.updated_successfully'));
    }

    // Eliminar producto
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('products.index')
            ->with('success', __('products.deleted_successfully'));
    }
}
