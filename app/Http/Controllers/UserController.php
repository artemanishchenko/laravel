<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show()
    {
        return view('post.show', [
            'title' => 'page title',
            'text' => 'hello world',
        ]);
    }

    public function all()
    {
        return 'all';
    }

    public function age($age)
    {
        return view('user.age', ['age' => $age]);
    }

    public function surnname($name, $surname)
    {
        return view('user.surnname', ['title' => 'page title', 'name' => $name, 'surname' => $surname]);
    }
}