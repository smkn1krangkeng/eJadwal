<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Excel;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;

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
    public function excel_export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    
    public function destroy($id)
    {
        $id=Crypt::decryptString($id);    
        dd($id);
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
            'roles' => 'required',
            'permissions' => 'nullable',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('error','Update Failed')->withInput();
        }
        //filter password yg kosong
        $array = collect( $request->all() )->filter()->all();
        //ambil array name, email, dan password
        $slice1 = Arr::only($array, ['name', 'email','password']);
        //ambil data role dan permission
        $slice2 = Arr::only($array, ['roles', 'permissions']);
        //ambil data role user
        $user_roles = Arr::get($slice2, 'roles');
        //ambil data permission user
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
            print_r($id."<br>");
        }
        if ($count>0){
            foreach($rids as $rid){
                $id=Crypt::decryptString($rid);
                eksekusi($id);
            }
        }else{
            return back()->with('error','Tidak ada data yang dipilih');
        }
    }


}
