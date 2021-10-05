<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


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
        return view('pages.pengguna.index',$data);
    }

    public function create()
    {
        $data['roles']= Role::all();
        $data['permission']= Permission::all();
        return view('pages.pengguna.create',$data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'roles' => 'nullable',
            'permissions' => 'nullable',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('error','Update Failed')->withInput();
        }
        //filter password yg kosong
        $array = collect([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'roles'=>$request->input('roles'),
            'permissions'=>$request->input('permissions'),
        ])->filter()->all();
        
        //ambil array name, email, dan password
        $slice1 = Arr::only($array, ['name', 'email','password']);
        //dd($slice1);
        //ambil data role dan permission
        $slice2 = Arr::only($array, ['roles', 'permissions']);
        //ambil data role user
        $user_roles = Arr::get($slice2, 'roles');
        //ambil data permission user
        //dd($user_roles);
        $user_permissions = Arr::get($slice2, 'permissions');
        
        //insert data
        $user = User::create($slice1);
        $user->syncRoles($user_roles);
        $user->syncPermissions($user_permissions);
        return redirect()->route('pengguna.index')->with('success','Add User Success');
    }

    public function user_export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function user_import(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'user_file' => 'required|mimes:xlsx',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('error','Import Failed');
        }

        $file = $request->file('user_file');

        //storage\app\uploads
        // $path = $file->storeAs(
        //     'uploads', 'users.xlsx' , 'public'
        // );

        $path = $file->storeAs(
            'uploads', 'users.xlsx'
        );
        
        Excel::import(new UsersImport, storage_path('app/uploads/users.xlsx'));
        //dd($path);
        return redirect()->route('pengguna.index')->with('success','Import Success');
    }
    
    public function destroy($id)
    {
        $id=Crypt::decryptString($id);    
        //dd($id);
        User::where('id',$id)->delete();
        return redirect()->route('pengguna.index')->with('success','Delete Success');
    }
    
    public function edit($id)
    {
        $id=Crypt::decryptString($id);    
        //dd($id);
        $data['user'] = User::with('roles')->with('permissions')->where('id', $id)->first();
        $data['roles']= Role::all();
        $data['permission']= Permission::all();
        return view('pages.pengguna.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $id=Crypt::decryptString($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|min:6',
            'roles' => 'nullable',
            'permissions' => 'nullable',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('error','Update Failed')->withInput();
        }

        if(!empty($request->input('password'))) {
            $password=Hash::make($request->input('password'));
        } else {
            $password=null;
        }

        //filter password yg kosong
        $array = collect([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$password,
            'roles'=>$request->input('roles'),
            'permissions'=>$request->input('permissions'),
        ])->filter()->all();
        //ambil array name, email, dan password
        $slice1 = Arr::only($array, ['name', 'email','password']);
        //dd($slice1);
        //ambil data role dan permission
        $slice2 = Arr::only($array, ['roles', 'permissions']);
        //ambil data role user
        $user_roles = Arr::get($slice2, 'roles');
        //ambil data permission user
        //dd($user_roles);
        $user_permissions = Arr::get($slice2, 'permissions');

        //update data
        $user = User::find($id);
        $user->update($slice1);
        $user->syncRoles($user_roles);
        $user->syncPermissions($user_permissions);
        
        return redirect()->route('pengguna.index')->with('success','Update Success');
    }

    public function deleteSel(Request $request)
    {
        $ids = explode(",",$request->userids); //membuat array
        $nids = collect($ids); //membuat collection array
        $rids = collect($ids)->filter()->all(); //memfilter array
        $count= $nids->filter()->count(); //menghitung panjang array

        //fungsi untuk foreach
        function eksekusi($id){
            User::where('id',$id)->delete();
        }
        if ($count>0){
            foreach($rids as $rid){
                $id=Crypt::decryptString($rid);
                eksekusi($id);
            }
            return redirect()->route('pengguna.index')->with('success','Delete Success');
        }else{
            return back()->with('error','Tidak ada data yang dipilih');
        }
    }


}
