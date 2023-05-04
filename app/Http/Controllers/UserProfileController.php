<?php

namespace App\Http\Controllers;

use App\Models\data_users;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function edit(User $user){
        $data_user = data_users::where('user_id', Auth::user()->id)->get();

        return view('user_profile.edit', compact('user', 'data_user'));
    }

    public function update(){

    }
}
