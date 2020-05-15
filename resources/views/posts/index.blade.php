@extends('layouts.layout')

@section('content')
    <div class = "card">
        <div class="card-header"><h1>Posts-Sell and Buy your product here!</h1></div>
    
        <div class = "card-body">
        @if(count($posts) > 0)
            @foreach ($posts as $post)
                <a href="{{url('/posts/'.$post->id)}}">
                <div class="card postscard">
                <div class = "row">
                    <div class = "col-md-4 col-sm-4" align="center" style="height: 90px; width: 100%;">
                        <img class="card-img" src="{{url('/storage/post_image/'.$post->post_image)}}">
                    </div>
                    <div class = "col-md-8 col-sm-8">
                            <h2>{{$post->title}}</h2>
                            <h3>RM {{$post->price}}</h3>
                            <p>Created on {{$post->created_at}} by {{$post->user->name}}</p>
                    </div>
                </div>
                </div>
            </a>
            
            @endforeach
            {{ $posts->links() }}
        @else
            <p>No Post Found</p>
        @endif
    </div>
</div>
@endsection