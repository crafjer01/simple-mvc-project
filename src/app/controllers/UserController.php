<?php

namespace App\app\Controllers;

use App\core\App;

class UserController
{

    public function index()
    {
        $users = App::get('database')->all('users');

        return view('users/index', compact('users'));

    }

    public function store()
    {
        App::get('database')->insert('users', $_POST);

        return redirect('usuarios');
    }
}
