@extends('app')


@section('content')

<h1>Write your Article</h1>
<hr/>
{!! Form::open(['url'=>'articles']) !!}
@include('articles.form',['submitbuttontext'=>'Create Article']);


{!! Form::close() !!}

@include('errors.list');


@endsection

