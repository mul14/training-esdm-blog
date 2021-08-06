<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }

    public function postRegister()
    {
        $validation = validator()->make(request()->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4',
        ]);

        if ($validation->passes()) {

            $user = new User();
            $user->name = request()->name;
            $user->email = request()->email;
            $user->password = bcrypt(request()->password);

            $user->save();

            return redirect('/login')->with('message', 'Berhasil mendaftarkan user');

        } else {
            return back()
                ->withErrors($validation)
                ->with('status', 'Gagal mendaftarkan user');
        }
    }

    public function getLogin()
    {
        return view('login');
    }

    public function postLogin()
    {
        $credentials = request()->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect('/');
        }

        return back()->with('message', 'Gagal login');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/login');
    }
}
