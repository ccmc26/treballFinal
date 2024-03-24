<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
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
        $articulo = Articulo::all();
        return response()->json($articulo);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $articulo = Articulo::create(request()->all());

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'stock' => 'required|integer|min:0',
            'discount' => 'required|integer|min:0|max:1',
            'photo' => 'required|url',
        ]);

        $articulo = Articulo::create($validatedData);

        return response()->json([
            'message' => "creado correctamente",
            'articulo' => $articulo
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'discount' => 'required',
            'photo' => 'required'
        ]);
        $articulo = Articulo::create($validated);

        return response()->json([
            'message' => "guardado correctamente",
            'articulo' => $articulo
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $articulo = Articulo::find($id);

        if($articulo){
            return response()->json([
                'message' => "Articulo encontrado correctamente",
                'articulo' => $articulo
            ]);
        }else{
            return response('No se ha encontrado el articulo');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        if(!$articulo){
            return response("No se ha encontrado el articulo");
        }else{
            return response()->json([
                'message' => "Articulo encontrado correctamente",
                'articulo' => $articulo
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $articulo = Articulo::find($id);
        if($articulo){
            $articulo->fill($request->all());
            $articulo->save();
            return response()->json([
                'message' => "Articulo actualizado correctamente",
                'articulo' => $articulo
            ]);
        }else{
            return response('No se ha encontrado el usuario');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        if($articulo){
            $articulo->delete();
            return response()->json([
                'message' => "Articulo eliminado correctamente",
                'articulo' => $articulo
            ]);
        }else{
            return response('No se ha encontrado el usuario');
        }
    }
}
