<?php

namespace App\Http\Controllers;
use App\Models\Post10;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class PostController extends Controller
{
	public function show()
	{
		return view('post.show', [
			'title' => 'page title',
			'text' => 'page content',
		]);
	}


	public function get($order, $dir) {
        $posts10=DB::table('posts10')->orderBy($order,$dir)->get();
        return view('posts10.get', ['title' => 'page title', 'posts10' => $posts10]);
   }

	public function getAll()
	{
		$posts10 = Post10::all();
		return view('posts10.getAll', ['title' => 'page title' , 'posts10' => $posts10]);
	}

	public function getOne($id)
	{
		$posts10 = Post10::findOrFail([$id]);
		return view('posts10.getOne', ['title' => 'page title', 'posts10' => $posts10, 'id' => $id]);
	}
}