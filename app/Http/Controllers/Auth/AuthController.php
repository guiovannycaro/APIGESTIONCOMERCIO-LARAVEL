<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

      public function register()
    {
        return view('auth.register');
    }




          public function regitrar(Request $request)
    {
        $request->validate([
           'email'=> 'required|unique:users,email',
           'password'=> 'required|min:4',
           'password_confirmation'=> 'required|same:password'
        ],[
            'email.required'=> 'el email es requerido',
            'email.unique'=> 'el email ya se ha usado'
        ]);

        User::create([
                       'name'=>$request->name,
                       'email'=>$request->email,
                       'password'=> bcrypt($request->password),
                       'idrol'=>$request->idrol
                      ]);

        return redirect()->route('authe')->with('success','usuario registrado correctamente');
    }

}