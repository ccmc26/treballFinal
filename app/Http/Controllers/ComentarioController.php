<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    public function index()
    {
        $coment = Comentario::all();
        return response()->json($coment);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|max:255',
            'producto' => 'required',
            'user' => 'required'
        ]);

        $coment = Comentario::create($validatedData);

        return response()->json([
            'message' => "creado correctamente",
            'comentario' => $coment
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required',
            'producto' => 'required',
            'user' => 'required',
        ]);
        $coment = Comentario::create($validated);

        return response()->json([
            'message' => "guardado correctamente",
            'articulo' => $coment
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $coment = Comentario::find($id);

        if($coment){
            return response()->json([
                'message' => "Comentario encontrado correctamente",
                'coment' => $coment
            ]);
        }else{
            return response('No se ha encontrado el comentario');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $coment = Comentario::findOrFail($id);
        if(!$coment){
            return response("No se ha encontrado el articulo");
        }else{
            return response()->json([
                'message' => "Comentario encontrado correctamente",
                'comentario' => $coment
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $coment = Comentario::find($id);
        if($coment){
            $coment->fill($request->all());
            $coment->save();
            return response()->json([
                'message' => "Comentario actualizado correctamente",
                'articulo' => $coment
            ]);
        }else{
            return response('No se ha encontrado el comentario');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $coment = Comentario::find($id);
        if($coment){
            $coment->delete();
            return response()->json([
                'message' => "Comentario eliminado correctamente",
                'articulo' => $coment
            ]);
        }else{
            return response('No se ha encontrado el comentario');
        }
    }
}
