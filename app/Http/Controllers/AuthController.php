<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
{
    return view('auth.login');
}

/* @POST
*/
public function login(Request $request){
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
        ]);
    if (\Auth::attempt([
        'email' => $request->email,
        'password' => $request->password])
    ){
        return redirect('/dashboard');
    }
    return redirect('/login')->with('error', 'email address is not present in our database');
}
/* GET
*/
public function logout(Request $request)
{
    if(\Auth::check())
    {
        \Auth::logout();
        $request->session()->invalidate();
    }
    return  redirect('/login');
}
}
