<?php

namespace App\Http\Controllers;

use App\AppUser;
use App\UserPassReset;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function showPasswordReminder()
    {
        return view('password.email');
    }






    public function postPasswordReminder(Request $request)
    {

        $user = AppUser::where('user_email', $request->email)->first();

        if(!$user){
            $request->session()->flash('message','There is not account associated with this email');
            return back();
        }

        $hash = Str::random(30);


        $reset = new UserPassReset();

        $reset->userid = $user->user_id;
        $reset->email = $user->user_email;
        $reset->passwordtoken = $hash;
        $reset->save();

        // *** need to send email



        return redirect()
            ->back()
            ->with('success', 'Your password reset link has sent to your email. Please check your email.');

    }






    public function confirmPasswordToken($code)
    {
        $reset = UserPassReset::wherePasswordtoken($code)->first();

        if($reset === null ){
            return redirect()
                ->route('home')
                ->with('info', 'Opps! Your code is not valid anymore. Generate new token for reset password');
        } else {

            return view('auth.password-reset-without-login')
                ->with('code', $code);

        }


    }
}
