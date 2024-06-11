<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
class AutenticacionController extends Controller
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

        User::create([
                       'name'=>$request->name,
                       'email'=>$request->email,
                       'password'=> bcrypt($request->password),
                       'idrol'=>$request->idrol
                      ]);

        return redirect()->route('authe')->with('success','usuario registrado correctamente');
    }


      public function login()
    {
        return view('index');
    }


      public function loginPost(Request $request)
    {



      $request->validate([
           'email'=> 'required|email',
           'password'=> 'required|min:4'
        ],[
            'email.required'=> 'el email es requerido',
            'email.unique'=> 'el email ya se ha usado'
        ]);

        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {

             $request->session()->put('email', $request->email);

            return redirect()->route('home');
        }

        return back()->withErrors(['invalid_credentials'=>'usuario o contraseña no validos']);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {

       Auth::logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken(); //probada-cumple esta función generando un nuevo TOKEN
       return redirect()->route('authe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
