<?php

namespace App\Http\Controllers;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SellerController extends Controller
{
    public function login(Request $request){
        $incomingFields = $request->validate([
            'name'=> 'required',
            'password'=> 'required'
        ]);
        if (auth()->attempt(['name'=>$incomingFields['name'],
                             'password'=>$incomingFields['password']],))
            {
                $request->session()->regenerate();
                return redirect('/SellerHomePage');
            }
        return redirect('/SellerLogin');
    }

    public function logout(){
            auth()->logout();
            return redirect('/SellerLogin');
            }

    public function register(Request $request){
        $incomingFields = $request->validate([
            'name' => 'required',
            'shopname' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required'
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $seller = Seller::create($incomingFields);
        auth()->login($seller);
        return redirect('/SellerLogin');
    }
}
