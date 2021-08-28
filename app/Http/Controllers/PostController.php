<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    	public function __construct()
		{
			return $this->middleware('auth');
		}

		public function index()
		{
			$posts = Post::all();
			$posts=Post::paginate(10);
			return view('post.index', compact('posts'));
		}
		
		public function create()
		{
			return view('post.post');
		}

		public function store(Request $request)
		{
				$post = new Post;
				$post->title = $request->get('title');
				$post->body = $request->get('body');
				$post->save();
				return redirect('posts');
		}

		public function show($id)
		{
			$post = Post::find($id);
			return view('post.show', compact('post'));
		}


		public function userposts()
		{
			$posts = Post::all();
			$posts=Post::paginate(10);
			return view('post.userpost', compact('posts'));
		}

		public function aboutme()
		{
		
			return view('post.aboutme');
		}
		public function booklist()
		{
		
			return view('post.booklist');
		}
}
