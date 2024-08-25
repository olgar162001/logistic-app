<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login(Request $request){
        $incomingField= $request -> validate([
            'email' => ['required'],
            'password' =>['required']
        ]);
        if(auth()->attempt(['email'=>$incomingField['email'],'password'=>$incomingField['password']])){
            $request->session()->regenerate();
            return redirect('/home');
        }
        return redirect('/login');
    }

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
    public function register(Request $request){

        $incomingField= $request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|string|email|max:255|unique:users',
    'password' => 'required|string|min:8|confirmed',
    'role' => 'required|string|in:super_admin,branch_admin,staff',
]);


        User::create($incomingField);
        return redirect('/login');
    
    }
}
