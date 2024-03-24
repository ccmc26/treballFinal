<?php

namespace App\Http\Controllers;

use App\Models\User_Language;
use Illuminate\Http\Request;
use Inertia\Inertia;

class User_LanguageViewController extends Controller
{
    public function index(){
        $user = auth()->user();
        if($user->email == 'admin@gmail.com'){
            $user_language = User_Language::all();
            return Inertia::render('UserLang/ListadoAlumnado', ['user_language' => $user_language]);
        }else{
            return redirect()->route('dashboard');
        }
    }

    public function create(){
        // $user = auth()->user();
        return Inertia::render('UserLang/Create', ['user' => User_Language::get()]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'id_user' => 'required',
            'id_language' => 'required',
            'level' => 'required'
        ]);
        User_Language::create($validated); // o save($language)´
        $user = auth()->user();
        if($user->email == 'admin@gmail.com'){
            return redirect()->route('uslang.index');
        }else{
            return redirect()->route('dashboard');
        }
    }

    public function show($id){

    }

    public function edit($id){
        $user = auth()->user();
        if($user->email == 'admin@gmail.com'){
            $uslang = User_Language::find($id);
            if(!$uslang){
                return redirect()->route('uslang.index')->with('error', 'Lengua no encontrada');
            }
            return Inertia::render('UserLang/Edit', ['uslang' => $uslang]);
        }else{
            return redirect()->route('uslang.index')->with('error', 'No tienes los permisos requeridos');
        }
    }

    public function update(User_Language $uslang, Request $request){
        $uslang->update([
            ...$request->all(),
            ...$request->validate([
                'id_user' => 'required',
                'id_language' => 'required',
                'level' => 'required'
            ])
        ]);

        // // Redireccionar a la llista de llibres
        return redirect()->route('uslang.index');
    }

    public function destroy(User_Language $uslang){
        $uslang->delete();
        return redirect()->back()->with('succes', 'Lengua eliminada');
    }
}
