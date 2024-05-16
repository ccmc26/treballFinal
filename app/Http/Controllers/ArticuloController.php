<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductListResource;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Ramsey\Uuid\Type\Integer;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductListResource::collection(Articulo::query()->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return new ProductResource(Articulo::create($request->validate()));

    }

    /**
     * Display the specified resource.
     */
    public function show(Articulo $product)
    {
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articulo $product)
    {
        $product->update($request->validated());
        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articulo $product)
    {
        $product->delete();
        return response()->noContent();
    }
}
