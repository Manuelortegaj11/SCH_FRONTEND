<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:users|min:6|max:20',
            'email' => 'required|unique:users|email|max:30',
            'password' => 'required|confirmed|min:6|max:14'
        ]);
        dd('Creando Usuario');
        //v 71
    }

}
