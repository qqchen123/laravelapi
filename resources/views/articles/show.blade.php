@extends('app')
@section('content')
    <h1>artcle</h1>
    <hr>
    <h2>{{$article->title}}</h2>
    <article>
        {{$article->content}}
    </article>
@stop