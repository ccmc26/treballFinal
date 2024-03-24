<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Log;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LanguageViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::all();
        // Log::create([]);
        return Inertia::render('ListadoIdiomas', ['languages' => $languages]);

    }

    /**
     * Show the form for creating a new resource.
     */

    //a partir de aqui hay que crear las vistas
    public function create()
    {
        $user = auth()->user();
        if($user->email == 'admin@gmail.com'){
            return Inertia::render('Language/Create', ['languages' => Language::get()]);
        }else{
            return redirect()->route('language.index')->with('error', 'No tienes los permisos necesarios');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'N_max' => 'required',
            'dificultad' => 'required'
        ]);
        $language = Language::create($validated); // o save($language)
        return redirect()->route('language.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $languages = Language::find($id);
        if($languages){
            return Inertia::render('Language/Show', ['languages' => $languages]);
        }else{
            //CAMBIAR
            // return response('No existe ningun idioma con el id indicado');
            return redirect()->route('language.index')->with('error', 'Lengua no encontrada');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    //HACERLO
    public function edit($id)
    {
        $user = auth()->user();
        if($user->email == 'admin@gmail.com'){
            $language = Language::find($id);
            if(!$language){
                return redirect()->route('language.index')->with('error', 'Lengua no encontrada');
            }
            return Inertia::render('Language/Edit', ['language' => $language]);
        }else{
            return redirect()->route('language.index')->with('error', 'No tienes los permisos requeridos');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        $language->update([
            ...$request->all(),
            ...$request->validate([
                'name' => 'required',
                'N_max' => 'required',
                'dificultad' => 'required'
            ])
        ]);

        // Redireccionar a la llista de llibres
        return redirect()->route('language.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        $user = auth()->user();
        if($user->email == 'admin@gmail.com'){
            $language->delete();
            return redirect()->back()->with('succes', 'Lengua eliminada');
        }else{
            return redirect()->back()->with('error', 'No tienes permiso');
        }
    }
}
