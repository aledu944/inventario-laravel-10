<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $credentials = $request->validated();

        if( !Auth::attempt($request->only('email', 'password')) ){
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        return redirect()->route('products.index');

    }
}
