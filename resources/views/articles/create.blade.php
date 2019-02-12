@extends('app')
@section('content')
    <h1>新增文章</h1>
    {!! Form::open(array('url' => '/articles')) !!}
    <div class="form-group">
        {{ Form::label('title') }}
        {{ Form::text('title', NULL, ['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('content') }}
        {{ Form::textarea('content', NULL, ['class'=>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('published_at') }}
        {{ Form::input('date','published_at', date('Y-m-d'), ['class'=>'form-control']) }}
    </div>
    {{ Form::submit('Click me!',['class'=>'form-control btn btn-primary']) }}
    {!! Form::close() !!}

@stop
@if($errors->any())
    <ul class="list-group">
        @foreach($errors->all as $error)
            <li class="list-group-item list-group-item-danger">
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
