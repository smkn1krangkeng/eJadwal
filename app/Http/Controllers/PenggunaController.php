<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Excel;
use App\Exports\UsersExport;

class PenggunaController extends Controller
{
    public function index()
    {
        // parsing data ke view
        // $users = User::all();
        // $title = 'Ini Judul';
        // return view('pages.pengguna',['users' => $users,'title'=>$title]);
        // atau
        // $data['users'] = User::select('name','email')->get();
        // $data['title'] = 'Ini Judul';
        // return view('pages.pengguna',$data);
        $data['users'] = User::with('roles')->with('permissions')->get();
        $data['users_count'] = User::with('roles')->with('permissions')->count();
        return view('pages.pengguna.index',$data);
    }
    public function excel_export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
