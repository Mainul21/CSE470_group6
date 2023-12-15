<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{   
    public function login(Request $request){
        $incomingFields = $request->validate([
            'username'=> 'required',
            'password'=> 'required'
        ]);
        if (auth()->attempt(['username'=>$incomingFields['username'],
                             'password'=>$incomingFields['password']],))   
            {   
                $request->session()->regenerate();
                return redirect('/LoginPage/HomePage');
            }
        return redirect('/LoginPage');
    }

    public function logout(){
            auth()->logout();
            return redirect('/LoginPage');
            }

    public function register(Request $request){
        $incomingFields = $request->validate([
            'username' => ['required', Rule::unique('users', 'username')] ,
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')], 
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required'
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);
        return redirect('/LoginPage/HomePage');
    }
}
