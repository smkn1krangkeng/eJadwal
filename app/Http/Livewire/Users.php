<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class Users extends Component
{
    public $user;
    public $name,$email,$password,$password_confirmation;
    
    public function render()
    {
        $this->users = User::with('roles')->with('permissions')->get();
        return view('livewire.users')->layout('layouts.back.app');
    }

    public function store()
    {
        $this->validate([
            'name' => 'min:5',
            'email' => 'email',
            'password' => 'min:6|confirmed'
        ]);
        session()->flash('success', 'Add User Success');
        return redirect()->route('users');
    }

}
