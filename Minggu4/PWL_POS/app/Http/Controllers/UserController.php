<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // // tambah data user dengan Eloquent Model
        // $data = [
        //     // 'nama' => 'Pelanggan Pertama',
        //     'level_id' =>2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);
        // UserModel::where('username', 'customer-1')->update($data); // update data user

        // coba akses model UserModel
        $jumlah_pengguna = UserModel::where('level_id', 2)->count();
        return view('user', ['jumlah_pengguna' => $jumlah_pengguna]);
    }
}