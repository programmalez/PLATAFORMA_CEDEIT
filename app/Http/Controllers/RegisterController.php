<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function index() {
        $users = User::paginate(10);
        $totaluser = User::count();
        return view('admin.Usuarios.users', compact('users', 'totaluser','query'));
    }
    public function create() {
        
        return view('auth.register');
    }

    public function store() {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user = User::create(request(['name', 'email', 'password','role']));
        if ($user->role == 'admin') {
            auth()->login($user);
            return redirect()->route('admin.index');
        } else if ($user->role == 'host')  {
            auth()->login($user);
            return redirect()->to('home');
        }
        
    }
   
    public function search(Request $request)
    {
        $query = $request->input('q');
        $users = User::where('name', 'LIKE', "%$query%")
            ->orWhere('email', 'LIKE', "%$query%")
            ->orWhere('role', 'LIKE', "%$query%")
            ->paginate(10);
        
        $totaluser = User::count();
    
        return view('admin.Usuarios.users', compact('users', 'totaluser','query'));
    }
}
