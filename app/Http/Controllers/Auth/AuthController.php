<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Exception;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
           'password_conf'=> 'required|same:password'
        ],[
            'email.required'=> 'el email es requerido',
            'email.unique'=> 'el email ya se ha usado'
        ]);
        $rol = '2';
      $inserted =   User::create([
                       'name'=>$request->name,
                       'email'=>$request->email,
                       'password'=> bcrypt($request->password),
                       'idrol'=>$rol
                      ]);

        if ($inserted) {

            return redirect()->route('authe')->with('success', 'usuario registrado correctamente');

        } else {
              dd($inserted);
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
           'email'=> 'required|email',
           'password'=> 'required|min:8',
           'confpassword'=> 'required|same:password'
        ]);





  $token = Str::random(68);
        $correo=  $request->email;
        $passwordconf =  $request->confpassword;
        $password = Hash::make($request->password);

        if($request->password == $passwordconf){
           $sql = "update users set password ='.$password.' where email= '.$correo.'";
           User::where('email', $request->email)->update(['password' =>  bcrypt($request->password)]);
            return redirect()->route('authe')->with('success', 'se ha cambiado la contraseña con exito');
        }


    return redirect()->route('recordar.index')->with('unsuccess', 'no se ha cambiado la contraseña con exito');



    }

}