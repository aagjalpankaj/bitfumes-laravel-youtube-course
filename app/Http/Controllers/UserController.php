<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
    //    $user = new User();
    //    $user->name = 'Pankaj23';
    //    $user->email = 'test1@dev.lcl';
    //    $user->password = 'pass';
    //    $user->save();

        // $users = User::all();

        User::all()->delete();

        return 'Deleted';
    }
}
