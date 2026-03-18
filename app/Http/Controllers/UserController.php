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
        $css = 'color: blue';
        return view('user.css', ['title' => 'page', 'css' => $css]);
    }

    public function redcolor()
    {
        $red = 'color:red';
        return view('user.redcolor', ['title' => 'page', 'red' => $red]);
    }

    public function href()
    {
        $text = 'Cсылка на сайт академии';
        $href = 'https://omacademy.ru/';
        return view('user.href', ['text' => $text, 'href' => $href]);
    }

    public function date()
    {
        $date = date('d-m-Y');
        return view('user.date', ['title' => 'page', 'date' => $date]);
    }

    public function massiv()
    {
        $name = 'artem';
        $age = '18';
        $salary = '30 000';
        return view('user.massiv', ['name' => $name, 'age' => $age, 'salary' => $salary]);
    }

    public function massiv9()
    {
        return view('user.massiv9', ['arr' => [1, 2, 3, 4, 5, 6, 7]]);
    }


    public function num10()
    {
        $city = '';
        return view('user.num10', ['title' => 'page', 'city' => $city]);
    }

    public function num11()
    {
        $country = 'германия';
        $city = 'кельн';
        return view('user.num11', ['title' => 'page', 'location' => ['country' => $country, 'city' => $city]]);
    }

    public function num12()
    {
        $year = '';
        $month = '';
        $day = '';
        return view('user.num12', ['title' => 'page', 'year' => $year, 'month' => $month, 'day' => $day]);
    }

    public function num13()
    {
        $str = '<b>text</b>';
        return view('user.num13', ['title' => 'page', 'str' => $str ]);
    }

    public function num14()
    {
        $str = '<b>text</b>';
        return view('user.num14', ['title' => 'page', 'str' => $str ]);
    }

     public function num15()
    {
        $age = 18;
        return view('user.num15', ['title' => 'page', 'age' => $age]);
    }

    public function num16()
    {
        $age = 6;
        return view('user.num16', ['title' => 'page', 'age' => $age]);
    }

    public function num17()
    {
        $age = 6;
        return view('user.num17', ['title' => 'page', 'age' => $age]);
    }

    public function num18()
    {
        return view('user.num18', ['title' => 'page', 'arr' => [1,2,3,4]]);
    }

    public function num19()
    {
        return view('user.num19', ['title' => 'page', 'arr' => [1,2,3,4]]);
    }

    public function num20()
    {
        return view('user.num20', ['title' => 'page', 'arr' => [1,2,3,4]]);
    }

    public function num21()
    {
        return view('user.num21', ['title' => 'page', 'arr' => [4,9,16,25]]);
    }

    public function num22()
    {
        return view('user.num22', ['title' => 'page', 'arr' => ['1'=>10, '2'=>20, '3'=>30]]);
    }

     public function num23()
    {
        return view('user.num23', ['title' => 'page', 'arr' => ['1'=>10, '2'=>20, '3'=>30]]);
    }

     public function num24()
    {
        return view('user.num24', ['title' => 'page', 'arr' => [1,2,3,4,5,6,7,8,9,10]]);
    }


    public function num25()
    {
        $date='22-04-2022';
        return view('user.num25', ['title' => 'page', 'date' => $date]);
    }
    
    public function num26(): mixed
    {
        return view('user.num26', ['title' => 'page', 'arr' => [[1,2,3],[4,5,6]] ]);
    }

    public function num27(): mixed
    {   
        $employees = [
		[
			'name' => 'user1',
			'surname' => 'surname1',
			'salary' => 1000,
		],
		[
			'name' => 'user2',
			'surname' => 'surname2',
			'salary' => 2000,
		],
		[
			'name' => 'user3',
			'surname' => 'surname3',
			'salary' => 3000,
		],
	];

        return view('user.num27', ['title' => 'page', 'employees' => $employees]);
    }
    

    public function num29()
    {
        return view('user.num29', ['title' => 'page', 'users' => ['user1'=> 'artem1', 'user2'=>'artem2', 'user3'=>'edmon']]);
    }

    public function num30()
    {
        return view('user.num30', ['title' => 'page', 'strs' => ['str1'=> 'stroka1', 'str2'=>'stroka2', 'str3'=>'stroka3']]);
    
    }

    public function num31()
    {
        return view('user.num31', ['title' => 'page', 'strs' => ['str1'=> 'stroka1', 'str2'=>'stroka2', 'str3'=>'stroka3']]);
    
    }

     public function num32()
    {
        $first = 'color: blue';
        $last = 'color: red';
        return view('user.num32', ['title' => 'page', 'strs' => ['str1'=> 'stroka1', 'str2'=>'stroka2', 'str3'=>'stroka3'], 'first'=>$first,'last'=>$last]);
    
    }

    public function num33()
    {
        return view('user.num33', ['title' => 'page', 'arr'=>[1,2,3,4,5,6,7,8,9,]]);
    
    }
}
