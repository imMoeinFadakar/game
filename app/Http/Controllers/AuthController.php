<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    

    public function showLoginPage()
    {
        return view("Login");
    }
    public function showDashboard()
    {
        return view("Dashboard");
    }
    public function create()
    {
        Admin::create([
            "name" => "moein",
            "age" => 22,
            "email" => "fadakarmoein39@gmail.com",
            "password" => bcrypt("moeinfadakar"),
            "Address" => "somewhere",
            "type" => "admin"
        ]); 
        return;
    }
   

    public function login(AuthRequest $request)  
    {  
        // Validate the request and retrieve credentials  
        $credentials = $request->only('email', 'password');  

        // Attempt to log in using the custom admin guard  
        if (Auth::guard('admin')->attempt($credentials)) {  
            // Authentication was successful  
            
            return redirect()->intended('admin/dashboard'); // Redirect to the admin dashboard or intended page  
        }  

        // Authentication failed  
        return back()->withErrors([  
            'email' => 'The provided credentials do not match our records.',  
        ])->withInput($request->only('email')); 
        
       

    }  

    public function logout()  
    {  
        Auth::guard('admin')->logout();  
        return redirect('/'); // Redirect to your login page  
    }  

}
