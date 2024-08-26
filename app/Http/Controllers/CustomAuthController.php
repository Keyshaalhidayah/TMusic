<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
 
 function check(Request $request)
    {
        $request->validate([
            'email' => 'email',
            'password' => 'password',
        ]);

    //
}
}
