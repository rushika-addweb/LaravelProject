<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers\Auth;


use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
{
    return view('auth.register');
}

/* POST
*/
public function store(Request $request)
{
    $validate =\Validator::make($request->all(), [
        'name' 		=> 'required',
        'email'	 	=> 'required|email|unique:users|max:255',
        'password' 	=> 'required|confirmed|max:8',
        'phone'     => 'required|min:10',
        'image'       =>'required|mimes:png,jpg,jpeg|max:2000'
    ]);
    if( $validate->fails()){
        return redirect()
        ->back()
        ->withErrors($validate);
    }
    $user_create = \App\User::create([
        'password'   => bcrypt($request->password),
        'email'      => $request->email,
        'name'       => $request->name,
        'phone'       =>$request->phone,
        'image'       =>$request->image

    ]);
    return redirect('/auth.register')->with('success', 'You have completed you registration..!');

    $user = User::create(request(['name', 'email', 'password','phone','image']));
        
        auth()->login($user);
        
        return redirect()->to('/home');

}
}
