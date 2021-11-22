<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class Index extends Component
{
    public function render()
    {
        $data['users'] = User::with('roles')->with('permissions')->get();
        return view('livewire.user.index',$data);
    }
}
