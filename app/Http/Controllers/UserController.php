<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {
        echo 'Hello user';
        // DB::insert('insert into users (name, email, password) values(?, ?, ?)', ['Pankaj', 'aagjalpankaj@gmail.com', 'password']);
        // $users = DB::select('select * from users;');
        dd($users);
    }
}
