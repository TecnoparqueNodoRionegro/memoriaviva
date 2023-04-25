<?php

namespace App\Http\Controllers;

use App\Models\data_users;
use App\Models\user_types;
use App\Models\State;
use App\Models\User;
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
    public function editUsers(User $user){
        $user_types = user_types::all();
        $State = State::all();
        $data_user = data_users::all();
        return view('user_types.editUsers', compact('user', 'user_types', 'State', 'data_user'));
    }
    public function editData(User $user){
        return view('user_types.editData', compact('user'));
        
    }
    public function updateUsers(Request $request, $user_id, $data_id)
{
    $user = User::find($user_id);
    $user->email = $request->email;
    $user->state_id = $request->state_id;
    $user->user_type_id = $request->user_type_id;
    $user->save();

    $data_user = data_users::find($data_id);
    $data_user->name = $request->name;
    $data_user->last_name = $request->last_name;
    $data_user->gender = $request->gender;
    $data_user->phone = $request->phone;
    $data_user->biography = $request->biography;
    $data_user->save();

    return redirect()->route('data_users_consult', $user_id)->with('success', 'Los datos se han actualizado correctamente');
}

   
    
}
