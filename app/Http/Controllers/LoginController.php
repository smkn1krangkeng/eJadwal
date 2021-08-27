<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('pages.app');
    }
    public function postLogin(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required'
        ]);

    }

}
