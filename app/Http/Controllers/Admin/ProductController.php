<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);  // 10 é a quantidade por página

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
    
        $price = (float) str_replace(['.', ','], ['', '.'], $data['price']);
    
        $data['in_stock'] = 48; // está fixo, mas vamos adicioná-lo no formulário ainda
        $data['price'] = $price * 100;
        $data['is_active'] = true;
    
        $product = Product::create($data);
    
        return redirect()->route('products.edit', ['product' => $product->id]);
    }    


    public function show($product)
    {
        return redirect()->route('products.edit', ['product' => $product]);
    }

    public function edit($product)
    {
        $product = Product::findOrFail($product);

        $product->price = $product->price / 100; //voltando pro ponto flutuante

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $product)
    {
        // Atualizando com mass assignment
        $data = $request->all();
        $price = (float) str_replace(['.', ','], ['', '.'], $data['price']);
        $data['price'] = $price * 100;

        $product = Product::findOrFail($product);
        $product->update($data);

        return redirect()->route('products.edit', ['product' => $product->id]);
    }

    public function destroy($product)
    {
        $product = Product::findOrFail($product);
        $product->delete();
        return redirect()->route('products.index');
    }


}