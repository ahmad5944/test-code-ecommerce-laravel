<?php

namespace App\Http\Controllers\Front\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FrontAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return redirect()->route('front.product');
    }
    public function userPostLogin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            $request->session()->regenerate();

            return redirect()->route('front.product');
        }
        return redirect('/user-login')->withErrors([
            'username' => 'Password atau Username anda salah!',
        ]);
    }

    protected function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('front.login');
    }
}
