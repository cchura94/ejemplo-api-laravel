<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function funListar(){
        $usuarios = DB::select("SELECT * from users");
        
        return $usuarios;
    }

    public function funGuardar(Request $request){
        $nombre = $request->name;
        $correo = $request->email;
        $pass = $request->password;
        
        DB::insert("INSERT INTO users (name, email, password) values ('$nombre', '$correo', '$pass')");

        return ["mensaje" => "Usuario registrado"];
    }

    public function funMostrar($id){
        
    }

    public function funModificar($id, Request $request){
        
    }

    public function funEliminar($id){
        
    }
}
