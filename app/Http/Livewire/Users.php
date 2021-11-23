<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class Users extends Component
{
    public $user;
    public function render()
    {
        $this->users = User::with('roles')->with('permissions')->get();
        return view('livewire.users')->extends('pages.users.index');
    }
}
