<?php

namespace App\Http\Controllers;
use App\Models\data_users;
use App\Models\user_types;
use Illuminate\Http\Request;

class UserTypesController extends Controller
{
    
    public function index()
    {
       $user_types = user_types::all();
       $user_types = user_types::paginate(10);
        return View('user_types.consult', ['user_types' => $user_types]);
        
    }
    public function indexUsers()
    {
       $data_users = data_users::all();
       $data_users = data_users::paginate(10);
        return View('user_types.consultaUsuarios', ['data_users' => $data_users]);
        
    }

    public function create(){
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
    public function edit(user_types $id){
       
        return view('user_types.Edit', compact('id'));
    }
    
    public function editUsers(data_users $id){
       
        return view('user_types.EditUsers', compact('id'));
    }
    public function update(Request $request, $id){
        $id = user_types::findOrFail($id);
        $data = $request->only('description');

        $id->update($data);
        return redirect()->route('user_types')->with('success', 'Actualizado');
    }
    public function updateUsers(Request $request, $id){
        $id = data_users::findOrFail($id);
        $data = $request->only('name');
        $data = $request->only('last_name');
        $data = $request->only('phone');

        $id->update($data);
        return redirect()->route('data_users_consult')->with('success', 'Actualizado');
    }
    
    
}
