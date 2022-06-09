<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create() {

            return view('Autenticacao.login');
    }

    public function store() {
        //Retorna para login se usuario ou senha estiver incorreto
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return redirect()->route('Autenticacao.login');
        }
    }

    //Para sai da autenticao bem sucedida
    public function destroy() {
        auth()->logout();

        return redirect()->route('Autenticacao.login');
    }
}
