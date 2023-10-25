<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginRegisterController extends Controller
{

    //Function untuk menampilkan view login
    public function login()
    {
        return view('LoginRegister.login', [
            'title' => 'SMK NEGERI 1 TAKALAR'
        ]);
    }

    // Function untuk proses login
    public function loginProses(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }else{
            return redirect('/login')->with('success', 'Incorrect email or password');
        }
    }

    // Function untuk menampilkan view registration
    public function register()
    {
        return view('LoginRegister.register', [
            'title' => 'SMK NEGERI 1 TAKALAR'
        ]);
    }

    // Function untuk proses registration
    public function registerProses(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'min:5', 'max:255'],
            'alamat' => ['required', 'min:5', 'max:255'],
            'no_handphone' => ['required', 'min:12', 'max:255'],
            'email' => ['required', 'min:5', 'unique:users', 'max:255'],
            'password' => ['required', 'min:5', 'max:255']
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);
        return redirect('/login')->with('success', 'Your registration is successful, please login!');
    }

    // Function untuk proses logout
    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login')->with('success', 'You made it out!');
    }

}
