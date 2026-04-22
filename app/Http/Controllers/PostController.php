<?php

namespace App\Http\Controllers;

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

	public function getAll()
	{
		$posts10 = DB::table('posts10')->get();
			return view('posts10.getAll', ['title' => 'page title' , 'posts10' => $posts10]);
	}

	public function getOne($id)
	{
		$posts10 = Post::find($id);
		return view('posts10.getOne', ['title' => 'page title', 'posts10' => $posts10]);
	}
}
