<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Article;
use Carbon\Carbon;
//use Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class ArticlesController extends Controller {

	//


	public function __construct()
	{
		 $this->middleware('auth',["only"=>"create"]);
		//$this->middleware('auth',["except"=>"create"]);
	}

	public function index()
	{


		//return(\Auth::user()->username);


		//$articles =  Article::latest('published_at')->get();
		$articles =  Article::latest('published_at')->published()->get();
		//$articles =  Article::latest('published_at')->where('published_at','<=',Carbon::now())->get();
		//$latest = Article::latest()->first();
		return view('articles.index',compact('articles'));
	}


//	public function show($id)
//	{
//
//		$article = Article::find($id);
//		 //dd($article->published_at);
//		//return $article;
//
//		if(is_null($article))
//			abort(404);
//		return view('articles.show',compact('article'));
//	}



	public function show(Article $article)
	{


		//dd($article->published_at);
		//return $article;

		if(is_null($article))
			abort(404);
		return view('articles.show',compact('article'));
	}



	public function create()
	{
//		if(Auth::guest())
//		{
//			return redirect('articles');
//		}
		$tags = \App\Tag::lists('name','id');
		return view('articles.create',compact('tags'));
	}


	private function createArticle(ArticleRequest $request)
	{
		$article = Auth::user()->articles()->create($request->all());

		$this->syncTags($article,$request->input('taglist'));

		return $article;

	}

	public  function store(ArticleRequest $request)
	{

		//dd($request->input('tags'));




		//$input = Request::all();
		//$input = Request::get('title');
		//$input = Request::all();
		//$input['published_at'] = Carbon::now();

		//$article = new Article();
		//Article::create($input);
		//$article->title = Request::get('title');
		//$article->body = $input['body'];
		//return $input;

		//Article::create(Request::all());
		//$article = new Article($request->all());



		$this->createArticle($request);
		//$tagIds = $request->input('tags');
		//$article->tags()->attach($request->input('taglist'));
		//$article = Auth::user()->articles()->create($request->all());
		//$article->tags()->syncTags($article,$request->input('taglist'));

//flash ->temporary put -> for the full session
//		session()->flash('flash_message','Your article has been created');
//		session()->flash('flash_message_important',true);
		//\Session::flash('flash_message','Your article has been created');

		//Auth::user()->articles()->save($article);
		//Article::create($request->all());

		//\Flash::info();
		//flash('Your article has been created')->important();
		//flash('Your article has been created');
		//flash()->success('Your article has been created');
		flash()->overlay('Your article has been created','Good Job');
		return redirect('articles');
//		 return redirect('articles')->with([
//			 'flash_message'=>'Your article has been created',
//			 'flash_message_important'=>'flash_message_important'
//		 ]);
	}


//	public  function store(Request $request)
//	{
//
//		$this->validate($request,['title'=>'required|min:3','body'=>'required','published_at' => 'required|date']);
//
//
//		Article::create($request->all());
//		return redirect('articles');
//	}




//public function edit($id)
//{
//
//	$article = Article::findOrFail($id);
//
//	return view('articles.edit',compact('article'));
//}

	public function edit(Article $article)
	{

		//$article = Article::findOrFail($id);
		$tags = \App\Tag::lists('name','id');

		return view('articles.edit',compact('article','tags'));
	}



//public function update($id, ArticleRequest $request)
//{
//	$article = Article::findOrFail($id);
//
//	$article->update($request->all());
//
//	return redirect('articles');
//}


	public function update(Article $article, ArticleRequest $request)
	{
		//$article = Article::findOrFail($id);

		$article->update($request->all());

		$this->syncTags($article,$request->input('taglist'));
		//$article->tags()->sync($request->input('tag_list'));
		//attach to add,detach to remove ,sync every thing up


		return redirect('articles');
	}



	private  function  syncTags(Article $article,array $tags)
	{
		$article->tags()->sync($tags);
	}

}
