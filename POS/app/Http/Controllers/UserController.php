<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userbebi($id, $name) {
        return view('user.userbebi', compact('id', 'name'));
    }
}
