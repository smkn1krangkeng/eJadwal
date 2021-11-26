<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class Users extends Component
{
    public $user,$name,$email;
    public $isAction='read';

    //realtime validation
    protected $rules = [
        'name' => 'min:6',
        'email' => 'email',
    ];
 
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    //reset form create
    private function resetCreateForm(){
        $this->name = '';
        $this->email = '';
    }
    
    public function render()
    {
        $this->users = User::with('roles')->with('permissions')->get();
        return view('livewire.users')->layout('layouts.back.app');
    }

    public function read()
    {
        $this->isAction='read';
    }

    public function create()
    {
        $this->isAction='create';
        $this->resetCreateForm();
        $this->resetValidation();
    }

    public function store()
    {
        $validatedData = $this->validate();
        session()->flash('success', 'Add User Success');
        $this->isAction='read';
        $this->resetCreateForm();
        return redirect()->route('users');
    }

}
