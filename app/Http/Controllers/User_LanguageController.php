<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Language;

class User_LanguageController extends Controller
{
    public function index(){
        $usuario = User_Language::all();
        return response()->json($usuario);
    }

    public function create(){
        $user = User_Language::create(request()->all());
        return response()->json([
            'message' => "creado correctamente",
            'user' => $user
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'id_user' => 'required',
            'id_language' => 'required',
            'level' => 'required',
        ]);
        $user = User_Language::create($validated);

        return response()->json([
            'message' => "creado correctamente",
            'user' => $user
        ]);
    }

    public function show($id){
        $user = User_Language::find($id);

        if($user){
            return response()->json([
                'message' => "Usuario encontrado correctamente",
                'user' => $user
            ]);
        }else{
            return response('No se ha encontrado el user');
        }
    }

    public function edit($id){
        $user = User_Language::find($id);
        if(!$user){
            return response("No se ha encontrado al usuario");
        }else{
            return response()->json([
                'message' => "Usuario encontrado correctamente",
                'user' => $user
            ]);
        }
    }

    public function update($id, Request $request){
        $user = User_Language::find($id);
        if($user){
            $user->fill($request->all());
            $user->save();
            return response()->json([
                'message' => "Usuario actualizado correctamente",
                'user' => $user
            ]);
        }else{
            return response('No se ha encontrado el usuario');
        }
    }

    public function destroy($id){
        $user = User_Language::find($id);
        if($user){
            $user->delete();
            return response()->json([
                'message' => "Usuario eliminado correctamente",
                'user' => $user
            ]);
        }else{
            return response('No se ha encontrado el usuario');
        }
    }
}
