<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function detail($id, $name){
        return view('user.detail')
            ->with('name', $name)
            ->with('id', $id);
    }
}
