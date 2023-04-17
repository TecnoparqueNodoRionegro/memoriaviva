<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function register(){
        return view('Auth.registro');
    }
    public function login(){
        return view('Auth.login');
    }
    public function registerVerify(Request $request){
        $request->validate([
            'email' => 'required','unique:users',
            'password' => 'required',
            'passwordConfirmation' => 'required|same:password'
        ]);

        $registro = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'state_id' => 1,
            'user_type_id' => 2
        ]);
        

        return redirect()->route('continuarRegistro')->with('id', $registro->id);
    }


    public function loginVerify(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email'=> $request->email, 'password' => $request->password, 'user_type_id' => 1])){
            return view('admin.admin');
        }elseif(Auth::attempt(['email'=> $request->email, 'password' => $request->password, 'user_type_id' => 2])){
            return ('Usuario');
        }
        return back()->withErrors(['invalid_credentials'=> 'Usuario o Contraseña no valida'])->withInput();
    }



    public function continuarRegistro(){
        $id = User::all();
        return view('Auth.continuarRegistro');
    }

    
    public function signOut(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'session cerrada correctamente');
    }
    
}
