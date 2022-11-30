<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use App\Models\Admin;

class AdminAuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function create(){
        return view('auth.admin_login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);

        if(Auth::guard('admin')->attempt($request->only('email','password'))){
            return redirect()->intended(route('admin.dashboard'));
        }
        //Authentication failed, redirect back with input.
        throw ValidationException::withMessages([
            'email' => 'Credentials doesn\'t match.',
        ]);
    }
}
