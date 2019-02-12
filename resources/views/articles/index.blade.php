@extends('app')
@section('content')
    <h1>artcles</h1>
    <hr>
    @foreach($articles as $article)
        <h2><a href="{{url('articles',$article->id)}}">{{$article->title}}</a> </h2>
        <article>
            {{$article->content}}
        </article>
    @endforeach
@stop