<?php

namespace App\Http\Controllers;

use App\Models\user_types;
use Illuminate\Http\Request;

class UserTypesController extends Controller
{
    
    public function index()
    {
        
        return View('user_types.register');
    }

    
    public function store(Request $request)
    {
        
     

        user_types::create([
            'description' => $request->description
        ]);
        

        return redirect()->route('user_types')->with('success', 'Usuario registrado Correctamente');
    }
    public function consult(){

        return View('user_types.consult');
    }

    
    
}
