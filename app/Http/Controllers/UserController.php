<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        User::create(
            [
                'name' => 'Yogesh',
                'email' => 'a@b.lcl',
                'password' => bcrypt('pass')
            ]

        );
    }
}
