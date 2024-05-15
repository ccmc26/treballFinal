<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
    //funcio login, recull els parametres i els valida, sino són correctes te retorna un missatge comunicant-te-ho
    //si si son correctes comproba si l'usuari es admin, si no ho es li tanca la sesio i li comunica que no te els suficients permissos
    //si si que ho es, li crea un token i torna els datos de l'usuari amb el token
    public function login(Request $request){
        $info = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(!Auth::attempt($info)){
            return response ([
                'message' => 'Email or password is incorrect'
            ]);
        }

        $user = Auth::user();
        if(!$user->is_admin){
            Auth::logout();
            return response([
                'message' => 'You don\'t have permission to authenticate as admin'
            ]);
        }
        $token = $user->createToken('main')->plainTextToken;
        return response([
            'user' => $user,
            'token' => $token
        ]);
    }

    public function logout(){

    }
}
