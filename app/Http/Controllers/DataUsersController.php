<?php

namespace App\Http\Controllers;

use App\Models\data_users;
use Illuminate\Http\Request;

class DataUsersController extends Controller
{
    
    public function store(Request $request)
    {
        data_users::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'biography' => NULL,
            'user_id' => $request->id_user,
            'file_id' => 1,
        ]);
        

        return redirect()->route('login')->with('success', 'Usuario registrado Correctamente');
    }
}
