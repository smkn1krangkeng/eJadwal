<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Excel;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\Crypt;

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
    
    public function edit(Request $request,$id)
    {
        $id=Crypt::decryptString($id);    
        //dd($id);
        $data['user'] = User::with('roles')->with('permissions')->where('id', $id)->first();
        return view('pages.pengguna.edit',$data);
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
