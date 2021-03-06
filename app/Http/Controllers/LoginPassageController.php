<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class LoginPassageController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        

        $exist = $this->userExist();
        

        $credentials = $request->only('name', 'password');

       

        if($exist){
            if (Auth::attempt($credentials)) {
                // Authentication passed...
                
                return redirect()->intended('dashboard');
            }else{
                
                return redirect()->route('login');
            }
        }else{
            if($request->password === "innoveran" && $request->name === "Administrator")
            {
                User::create([
                    'name' => $request['name'],
                    'email' => 'info@buffer.media',
                    'password' => $request['password'],
                ]);
                
               
                return redirect()->intended('dashboard');
            }else{
                return redirect()->route('login');
            }
        }
        
    }

    private function userExist()
    {
        return User::where([
            ['name','=','Administrator'],
            ['email','=','info@buffer.media']
        ])->exists();
    }
}
