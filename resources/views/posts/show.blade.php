@extends('layouts.layout')

@section('content')
<br>
    <div class="card">
        <div class="card-header">
    <a href="{{url('/posts')}}" class="btn btn-success float-right">Go Back</a>
        <h1>{{$post->title}}</h1>
        </div>
        <div class="card-body">
        <div class = "row">
            <div class = "col-md-12" align="center">
            <img style="width: 375px;"src="{{url('/storage/post_image/'.$post->post_image)}}">
            </div>
            <div class = "col-md-12 ">
                <table class="table">
                <tbody>
                        <tr>
                        <th scope="row">Title :</th>
                            <td>{{$post->title}}</td>
                        </tr>
                        <th scope="row">Price(RM) :</th>
                            <td>{{$post->price}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Description :</th>
                            <td>{{$post->description}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Post datetime :</th>
                            <td>{{$post->created_at}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Post by :</th>
                            <td>{{$post->user->name}}</td>
                        </tr>
                </tbody>
                </table>
            </div>
        </div>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)

            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                <a href="{{url('/posts/'.$post->id.'/edit')}}" class="btn btn-primary">Edit</a>
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
            @else
            <a href="{{url('/purchase/confirmPurchase/'.$post->id)}}" class="btn btn-primary float-right">Purchase</a>
            @endif
        @else
            <a href="{{url('/purchase/confirmPurchase/'.$post->id)}}" class="btn btn-primary float-right">Purchase</a>
        @endif
        </div>
    </div>
@endsection