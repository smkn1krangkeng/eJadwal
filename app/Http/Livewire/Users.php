<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class Users extends Component
{
    use LivewireAlert;
    public $user;
    public $name,$email,$password,$password_confirmation,$user_id;
    public $mode='list';
    
    public function render()
    {
        $this->users = User::with('roles')->with('permissions')->get();
        return view('livewire.users')->layout('layouts.back.app');
    }

    private function resetForm(){
        $this->name='';
        $this->email='';
        $this->password='';
        $this->password_confirmation='';
        $this->resetValidation();
    }

    private function ShowAlert($tipe,$pesan){
        $this->alert($tipe, $pesan, [
            'position' => 'center',
            'timer' => 2000,
            'toast' => false,
            'timerProgressBar' => true,
           ]);
    }

    public function store()
    {
        $validasi=Validator::make([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
        ],
        [
            'name' => 'min:5',
            'email' => 'email',
            'password' => 'min:6|confirmed'
        ]);
        if($validasi->fails()){
            $this->ShowAlert('error','Add User Failed');
            $validasi->validate();
        }else{
            User::updateOrCreate(['id' => $this->user_id], [
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
            ]);
            $this->ShowAlert('success','Add User Successfully');
            $this->resetForm();
            $this->mode='list';
        }
    }

    public function delete($id)
    {
        User::find($id)->delete();
        $this->ShowAlert('success','Delete User Successfully');
        $this->resetForm();
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $this->student_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

}
