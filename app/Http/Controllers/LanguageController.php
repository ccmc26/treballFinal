<?php
namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller{
    public function index(){
        $languages = Language::all();
        return response()->json($languages);
    }

    public function create(Request $request){
        $language = Language::create(request()->all());
        return response()->json([
            'message' => "Creado correctamente",
            'user' => $language
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'N_max' => 'required',
            'dificultad' => 'required'
        ]);
        $language = Language::create($validated); // o save($language)

        return response()->json([
            'message' => "creado correctamente",
            'language' => $language
        ]);
    }

    public function show($id){
        $languages = Language::find($id);
        if($languages){
            return response()->json([
                'message' => "Se ha encontrado el idioma indicado",
                'language' => $languages
            ]);
        }else{
            return response('No existe ningun idioma con el id indicado');
        }
    }

    public function update($id, Request $request){
        $language = Language::find($id);
        if($language){
            $language->fill($request->all());
            $language->save(); // o Language::create($language)
            return response()->json([
                'message' => "Idioma actualizado correctamente",
                'language' => $language
            ]);
        }else{
            response('No se ha podido encontrar ningun idioma con el id indicado');
        }
    }

    public function destroy($id){
        $languages = Language::find($id);

        if($languages){
            $languages->delete();
            return response()->json([
                'message' => 'Idioma borrado correctamente',
                'language' => $languages
            ]);
        }else{
            return response('No se ha podido eliminar porque no existe ningun idioma con el id indicado');
        }
    }
}
