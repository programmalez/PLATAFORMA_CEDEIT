<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionsController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(){
        if(auth()->attempt(request(['email','password'])) == false){
            return back()->withErrors([
                'message' => ' The email or password is incorrect, please try again',
            ]);
        } else {
    
            if(auth()->user()->role == 'admin'){
                return redirect()->route('admin.index');
            } else {
                return redirect()->to('home');
            }
        }
    }
    public function index(){
        return view('admin.index');
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('login');
    }
}