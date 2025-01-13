<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = $this->getProductsFromFile();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product = Product::create($validated);
        $this->updateProductsFile();

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validated);
        $this->updateProductsFile();

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $this->updateProductsFile();

        return redirect()->route('products.index');
    }

    private function getProductsFromFile()
    {
        $json = file_get_contents(storage_path('app/products.json'));
        return json_decode($json, true);
    }

    private function updateProductsFile()
    {
        $products = Product::all();
        file_put_contents(storage_path('app/products.json'), json_encode($products));
    }
}
