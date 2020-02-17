<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class AdminController extends Controller
{
    //

    public function createUser(){
        return view("backend-pages.createUser");
    }
    public function userCreated(Request $request){

        $validatedData = $request->validate([
            'name'=>'required|unique:users',
            'email'=>'required|unique:users'
        ]);

        $roleExistCount = count(Role::where("name",$request->role)->get());
        $role ="";
        if($roleExistCount == 0)
        {
            $role = $this->createRole($request->role);
        }

        $user = $this->insertUser($request);

        if($role == "")
        {
            $role = Role::where('slug', $request->role)->first();
        }

        $user->roles()->attach($role->id);

        return redirect()->back()->with('success',  'User "'.$user->name.'" has been created with "'.$role->name.'" role');
          
    }

    private function createRole($roleValue)
    {
       
        $role = Role::create([
            'slug'=>$roleValue,
            'name'=>ucfirst($roleValue),
        ]);

        return $role;
    }

    private function insertUser($request)
    {
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => 'bu55er$4321',
        ]);

        return $user;
    }
}
