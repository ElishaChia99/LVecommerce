@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">Dashborad</div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="../public/posts/create">Create Post</a>
                    <h3> Your Product Posts</h3>
                    @if(count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Post ID</th>
                            <th>Title</th>
                            <th>Upload Date</th>
                            <th>Total Purchase</th>
                            <th>Action</th>
                        </tr>
                        @foreach($posts as $post)
                        
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{count($post->purchase)}}</td>
                            <td>  
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                            <a href="{{url('/purchase/'.$post->id)}}" class="btn btn-success">View Purchase List</a>
                            {{Form::hidden('_method', 'DELETE')}}
                            <a href="{{url('/posts/'.$post->id.'/edit')}}" class="btn btn-primary">Edit</a>
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td>
                        </tr>
                        @endforeach

                    </table> 
                    @else
                        <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <div class="card">

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3> Your Purchase List</h3>
                    @if(count($purchase) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Purchase ID</th>
                            <th>Post ID</th>
                            <th>Title</th>
                            <th>Purchase date</th>
                            <th>Product Price</th>
                            <th>Seller Email</th>
                            <th>Status</th>
                        </tr>
                        @foreach($purchase as $purchases)
                        <tr>
                            <td>{{$purchases->id}}</td>
                            <td>{{$purchases->post->id}}</td>
                            <td>{{$purchases->post->title}}</td>
                            <td>{{$purchases->created_at}}</td>
                            <td>{{$purchases->post->price}}</td>
                            <td>{{$purchases->user->email}}</td>
                            <td>{{$purchases->purchase_status}}</td>

                        </tr>
                        @endforeach
                    </table> 
                    <h5>Product will be shipped after the payment has made. Please contact the seller.</h5>
                    @else
                        <p>You have no not yet purchase anythings</p>
                    @endif
                </div>
        </div>
    </div>
</div>
@endsection
