@extends('app')

@section('content')
<h2>This is an Article</h2>

@foreach($articles as $article)
<article>
<a href="{{ action('ArticlesController@show',[$article->id])}}"><h3>{{$article->title}}</h3>
	{{$article->body}}
</a>
</article>
@endforeach
@endsection
