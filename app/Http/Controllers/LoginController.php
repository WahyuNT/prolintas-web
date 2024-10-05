<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    public function loginPage(Request $request)
    {
        $token = $request->bearerToken() ?? $request->cookie('token');
        if ($token) {

            return redirect()->route('admin.dashboard');
        } else {
            return view('pages.login');
        }


        return view('pages.login');
    }
    public function registerPage(Request $request)
    {

        $token = $request->bearerToken() ?? $request->cookie('token');
        if ($token) {

            return redirect()->route('admin.dashboard');
        } else {
            return view('pages.register');
        }

    }
    public function login(Request $request)
    {
        $token = $request->bearerToken() ?? $request->cookie('token');
        if ($token) {

            return redirect()->route('admin.dashboard');
        } else {
            return view('pages.login');
        }


        return view('pages.login');
    }

    public function register()
    {
        return view('register');
    }

    public function registerProses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $data = new User();
        $data->username = $request->input('username');
        $data->email = $request->input('email');
  
        $data->password = bcrypt($request->input('password'));

        if ($data->save()) {

            return redirect('/login')->with('success', 'Registration successful, please log in.');
        } else {

            return redirect('/register')->with('error', 'Registration failed.');
        }
    }

    public function loginStore(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Mengambil credentials dari request
        $credentials = $request->only('username', 'password');

        try {
            // Coba membuat token menggunakan credentials yang diberikan
            if (!$token = JWTAuth::attempt($credentials)) {

                return redirect('/login')->with('error', 'Username and password do not match.');
            }
        } catch (JWTException $e) {

            return redirect('/login')->with('error', 'Please try again.');
        }

        // Mengatur cookie dengan token JWT
        $cookie = $this->getCookieWithToken($token);

        // Mengembalikan response dengan cookie
        return redirect()->route('admin.dashboard')->withCookie($cookie);
    }

    public function logout(Request $request)
    {
        // Menghapus token dari cookie
        $cookie = Cookie::forget('token');

        return redirect('/login')->withCookie($cookie);
    }

    protected function getCookieWithToken($token)
    {
        return cookie(
            'token',
            $token,
            5760,
            null,
            null,
            false,
            true,
            false,
            'Strict'
        );
    }
}
