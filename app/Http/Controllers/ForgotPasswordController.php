<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Brian2694\Toastr\Facades\Toastr;

class ForgotPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     use SendsPasswordResetEmails;

     public function getEmail()
    {
       return view('auth.email');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);


        try {

            $token = Str::random(60);
            $email = $request->email;
            $passwordReset = [
                'email'      => $email,
                'token'      => $token,
                'created_at' => Carbon::now(),
            ];


            DB::table('password_resets')->insert($passwordReset);

            Mail::send('auth.verify',
            ['token' => $token],
             function ($message) use ($request) {
                $message->from($request->email);
                 $email = $request->email;
                $message->to($email);
                $message->subject('Reset Password Notification');
            });
            return redirect()->back()->with('success', 'We have e-mailed your password reset link! :)');

        }catch(Exception $er) {
             DB::rollback();
              return redirect()->back();
        }
    }



}