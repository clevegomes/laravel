@extends('app')


@section('content')



<h3>People i like</h3>
@if(count($people))
<ui>
@foreach ($people as $person)
<li>{{$person}}</li>
@endforeach
</ui>
@endif


@stop

