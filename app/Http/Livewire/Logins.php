<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logins extends Component
{
    public $email,$password;

    public function render()
    {
        return view('livewire.logins')->layout('layouts.frontend.login.main');
    }

    public function login()
    {
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (Auth::attempt($credentials)) {
            session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        session()->flash('loginError', 'Login Failed');
        return redirect()->to('/login');
    }

}
