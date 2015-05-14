@extends('app')

@section('content')
<h2>This is an Article</h2>


<article>
<h3>{{$article->title}}</h3>
	{{$article->body}}

</article>
@unless($article->tags->isEmpty())
<h5>Tags</h5>
<ul>
	@foreach($article->tags as $tag)
	<li>{{$tag->name}}</li>
	@endforeach
</ul>
@endunless
@endsection
