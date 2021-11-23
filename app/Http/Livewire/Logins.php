<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Logins extends Component
{
    public function render()
    {
        return view('livewire.logins')->extends('layout.frontend.login.main')->section('login_form');
    }
}
