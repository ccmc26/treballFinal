<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index(){
        $usuario = User::all();
        return response()->json($usuario);
    }

    public function index2(){
        $usuario = User::get();
        return response()->json($usuario);
    }

    public function create(){
        $user = User::create(request()->all());
        return response()->json([
            'message' => "creado correctamente",
            'user' => $user
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'unique:users', 'email', 'bail'],
            'password' => 'required',
            // 'avatar' => 'nullable'
        ]);
        $user = User::create($validated);

        return response()->json([
            'message' => "creado correctamente",
            'user' => $user
        ]);
    }

    public function show($id){
        $user = User::find($id);

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
        $user = User::find($id);
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
        $user = User::find($id);
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
        $user = User::find($id);
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
