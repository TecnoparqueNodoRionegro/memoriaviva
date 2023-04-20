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
            'biography' => "sin biografia",
            'user_id' => $request->id_user,
            'file_id' => 1,
        ]);
        
    
        return redirect()->route('login')->with('success', 'Usuario registrado Correctamente');
        
        
    }
    public function storeAdmin(Request $request)
    {
        data_users::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'biography' => "sin biografia",
            'user_id' => $request->id_user,
            'file_id' => 1,
        ]);
        
    
        return redirect()->route('data_users_consult')->with('success', 'Usuario registrado Correctamente');
        
        
    }
    public function destroy($id){
        $data_types = data_users::findOrFail($id);
        $data_types->delete();
        return redirect()->back()->with('success', 'Categoría eliminada correctamente.');
        
    }
}
