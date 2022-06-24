<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticated(Request $request, $user)
{
    if ($user->hasRole('admin')) {
        return redirect()->route('admin.index');
    }

    return redirect()->route('student.index');
}
}
