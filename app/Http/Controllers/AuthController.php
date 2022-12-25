<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $Validator = Validator::make($request->all(), $rules);

        if ($Validator->fails()) {
            return redirect()->back()->withErrors($Validator)->withInput($request->all);
        }
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        Auth::attempt($data);

        if (Auth::check()) {
            $user = Auth::user();
            return redirect()->to('/dashboard');
        }

        return back()->with('loginError', 'Email atau Password Salah!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->to('/');
    }

    public function edit(Request $request)
    {
        User::where('id', '=', auth()->user()->id)->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return url('user');
    }

}
