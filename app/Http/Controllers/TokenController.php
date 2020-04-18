<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
/**
 * Description of TokenController
 *
 * @author marcelo
 */
class TokenController extends BaseController{
    
    public function gerarToken(Request $request) {
        $this->validate($request, [
            "email" => "required|email",
            "senha" => "required"
        ]);
        
        $usuario = User::where('email', $request->email)->first() ;
        if(is_null($usuario) || !Hash::check($request->senha, $usuario->password)){
            return response()->json("Usuário ou senha inválidos", 401);
        }
        $token = JWT::encode(
                ["email" => $request->email], 
                env("JWT_KEY")
        );
        
        return [
            "access_token" => $token
        ];
    }
}
