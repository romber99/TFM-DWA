<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all(); // Necesitaré tickets, session-user
        return view('users.catalog', compact('users'));
    }

    public function create() {}

}
