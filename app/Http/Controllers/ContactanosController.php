<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;


class ContactanosController extends Controller
{
    //
    public function index(){
        // return view('email.contactanos');
    }


    public function store(Request $request){
        
        $datos = request()->validate([
            'nombre' =>'required',
            'correo' =>'required',
            'mensaje' =>'required',
        ],[
            'nombre.required' => ('Campo de nombre obligatorio')
        ]
        );
        
    $correo = ($request->all());
    Mail::to('yudyrh17@gmail.com')->send(new ContactanosMailable($datos));

    return view('index');
    }
}
