<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\ProductsManager;
use App\Models\User;




class AuthManager extends Controller
{
    public function login()
 { 
    return view('auth.login'); 
 } 
   public function register()
 { 
    return view('auth.register'); 
 }
    function loginPost(Request $request) 
 { 
     // Validate the request... 
     $request->validate([ 
         'email' => 'required|email', 
         'password' => 'required', 
     ]); 

     $credentials = $request->only('email', 'password'); 

     if (Auth::attempt($credentials)) 
     { 
         $request->session()->regenerate(); 

         return redirect()->intended(route('home')); 
     } 

     return redirect('authlogin')->with('error', 'Invalid Email or Password'); 
 }
      function registerPost(Request $request)
 {
// Validate the request...
$request->validate([
'name' => 'required',
'email' => 'required|email',
'password' => 'required',
]);
$user = new User();
$user->name = $request->name;
$user->email = $request->email;
$user->password = Hash::make($request->password);
if($user->save())
{
return redirect(route('authlogin'))->with('success', 'User created
successfully');
}
else
{
return redirect(route('authregister'))->with('error', 'Failed to create user');
}
 }
}