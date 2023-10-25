<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Funtion untuk menampilkan view my prifile
    public function index() 
    {
       $user = User::where('id', auth()->user()->id)->first();
       return view('profile.index', [
            'title' => 'SMK NEGERI 1 TAKALAR',
            'user' => $user
       ]);
    }


}
