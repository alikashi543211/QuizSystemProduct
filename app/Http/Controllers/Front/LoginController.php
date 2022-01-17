<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Rules\LoginPasswordRule;
use Auth;
use App\Models\User;
use Hash;
use Session;

class LoginController extends Controller
{
    public function adminLoginForm()
    {
        return view("auth.admin_login", get_defined_vars());
    }

    public function login(Request $request)
    {
        $messages = [
            "email.required" => "Email is required",
            "email.email" => "Email is not valid",
            "email.exists" => "Email doesn't exists",
            "password.required" => "Password is required",
            "password.min" => "Password must be at least 8 characters"
        ];

        $rules = [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8'
        ];

        $this->validate($request, $rules, $messages);

        $user = User::where("email", $request->email)->first();
        $password = $user->password;
        
        $request->validate([
            'password' => [new LoginPasswordRule($password)]
        ]);

        // attempt to log
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password ])) 
        {
            // if successful -> redirect forward
            if(auth()->user()->role == "admin")
            {
                return redirect()->intended(route('admin.dashboard'));
            }
            if(auth()->user()->role == "user")
            {
                return redirect()->intended(route('user.dashboard'));
            }
            
        }else{
            return redirect()->route('login');
        }
    }
}
