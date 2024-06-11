<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;
use Hash;
use Carbon\Carbon;
use DB;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


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

      $inserted =   User::create([
                       'name'=>$request->name,
                       'email'=>$request->email,
                       'password'=> bcrypt($request->password),
                       'idrol'=>$request->idrol
                      ]);

        if ($inserted) {
            return redirect()->route('authe')->with('success', 'usuario registrado correctamente');
        } else {
            return redirect()->route('registro.index')->with('error', 'usuario no registrado correctamente');
        }
    }


        public function recordar()
    {
         return view('auth.recordar');
    }

    public function regupdate(Request $request)
    {

         $request->validate([
           'email'=> 'required|unique:users,email'
        ],[
            'email.required'=> 'el email es requerido'
        ]);

        $token = Str::random(64);


    }

}