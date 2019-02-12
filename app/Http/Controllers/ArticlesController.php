<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;

class ArticlesController extends Controller {
	//
	public function index()
	{
		$articles = Articles::latest()->published()->get();

		return view('articles.index', compact('articles'));
	}

	public function show($id)
	{
		$article = Articles::findOrFail($id);
		//		$article = Article::find($id);
		////		dd($article);
		//		if (is_null($article)){
		//			abort(404);
		//		}
		return view('articles.show', compact('article'));
	}

	public function create()
	{
		return view('articles.create');
	}

	public function store(CreateArticleRequest $request)
	{
		$input = $request->all();
		//		$input['published_at'] = Carbon::now();CreateArticleRequest
		Articles::create($input);
		redirect('/articles');
	}
}
