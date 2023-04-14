<?php

namespace App\Http\Controllers;

use App\Models\data_users;
use Illuminate\Http\Request;

class DataUsersController extends Controller
{
   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'user_id' => 'required'
        ]);

           $data = data_users::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'biography' => NULL,
            'user_id' => $request->user_id,
            'file_id' => 1
        ]);
        

        return redirect()->route('login');
    }
}
