@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header"><h1>Edit Post</h1></div>
        <div class="card-body">
            {!! Form::open(['action' => ['PostsController@update',$post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title',$post->title, ['class' => 'form-control', 'placeholder' => 'Example : coffee machine', 'autocomplete' => 'off'])}}
                </div>
                <div class="form-group">
                    {{Form::label('description ', 'Description')}}
                    {{Form::textarea('description',$post->description, ['class' => 'form-control', 'placeholder' => 'Example : this product is best in the whole world', 'autocomplete' => 'off'])}}
                </div>
                <div class="form-group">
                    {{Form::label('price ', 'Price')}}
                    {{Form::text('price',$post->price, ['class' => 'form-control', 'placeholder' => 'Example : 10.55', 'autocomplete' => 'off'])}}
                </div>
                <div class="form-group">
                    {{Form::label('post_image ', 'Product image. Only allow 2mb file.')}}<br>
                    {{Form::file('post_image')}}
                </div>

                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>

@endsection