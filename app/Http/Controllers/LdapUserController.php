<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ldap\User;

class LdapUserController extends Controller
{
    //
    public function index()
    {
        $users = User::get();

        return view('ldap.users.index', ['users' => $users]);
    }
}
