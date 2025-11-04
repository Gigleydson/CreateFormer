<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   // Carregar o formulário cadastrar novo usuário 
   public function create() {
        
        // Carregar a view
        return view('users.create');
   }

   public function store(Request $request) {
        dd($request);
   } 
}
