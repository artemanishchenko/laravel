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

	public function newpost() 
	{
		return view('posts10.newpost', ['title' => 'page title']);
	}

	public function store(Request $request)
	{
		$posts10 = new Post10;
		$posts10->title = $request->title;
		$posts10->desc = $request->desc;
		$posts10->save();
		return ('post/new/');
	}

	public function change() 
	{
		$posts10 = Post10::find(1);
		$posts10->title = 'Новый заголовок записи с id 1';
		$posts10->desc = 'новое описание заголовка с id 1';
		$posts10->save();
		return view('posts10.change', ['title' => 'page title']);
	}

	






}