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

    public function info()
    {
        return view('user.info', ['title' => 'page', 'name' => 'edmon', 'age' => '18', 'salary' => '20 000р']);
    }
    
    public function num3($name, $surname, $salary)
    {
        return view('user.num3', ['title' => 'page', 'name' => $name, 'surname' => $surname, 'salary' => $salary]);
    }

     public function css()
    {
        $css='color: blue';
        return view('user.css', ['title' => 'page', 'css'=> $css ]);
    }

    public function redcolor()
    {
        $red='color:red';
        return view('user.redcolor', ['title' => 'page', 'red' => $red ]);
    }

    public function href()
    {
        $text='Cсылка на сайт академии';
        $href='https://omacademy.ru/';
        return view('user.href', [ 'text' => $text, 'href'=>$href]);
    }

    public function date()
    {
        $date = date('d-m-Y');
        return view('user.date',['title' => 'page', 'date' => $date]);
    }

    public function massiv()
    {
        $name='artem';
        $age='18';
        $salary='30 000';
        return view('user.massiv', ['name'=> $name, 'age'=>$age, 'salary'=>$salary]);
    }
}