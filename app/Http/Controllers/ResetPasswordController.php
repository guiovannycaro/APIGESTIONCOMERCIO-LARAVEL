<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class ResetPasswordController extends Controller
{


    public function showResetForm(Request $request, $token, $email)
    {
        return view('auth.passwords.reset', ['token' => $token, 'email' => $email]);
    }

      public function updatePassword(Request $request){
            $request->validate([
                'email' => 'required|email|exists:users',
                'password' => 'required|string|min:6|confirmed',
                 'password_confirmation' => 'required',

                   ]);
          try {
                    $updatePassword = DB::table('password_resets')
                            ->where(['email' => $request->email, 'token' => $request->token])
                            ->first();

              if(!$updatePassword){
                  return back();
                } else{
                    User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
                    DB::table('password_reset_tokens')->where(['email'=> $request->email])->delete();
                   return redirect('auth')->with('message', 'Your password has been changed! :)');
                }

             }catch(Exception $e){

               DB::rollback();

               return redirect()->back();
        }

    }






}