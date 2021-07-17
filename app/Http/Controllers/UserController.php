<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function uploadAvatar( Request $request ) {

        if( $request->hasFile('image') ) {
            $fileName = $request->image->getClientOriginalName();

            if( Auth::user()->avatar ) {
                Storage::delete( '/public/images/' . Auth::user()->avatar );
            }

            $request->image->storeAs( 'images', $fileName, 'public' );
            Auth::user()->update( ['avatar' => $fileName] );

            return redirect()->back()->with('success', 'Image uploaded!');
        }

        return redirect()->back()->with('error', 'Please select an image.');
    }
}
