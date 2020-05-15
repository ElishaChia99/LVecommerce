@extends('layouts.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Confirm Purchase</h1>
        <h1>{{$post->title}}</h1>
    </div>
    <div class="card-body">
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
                <tr>
                    <th scope="row">Please contact the owner for make payment :</th>
                    <th>email : {{$post->user->email}}</th>
                </tr>
                <tr>
                <tr>
                <th scope="row"></th>
                <td>
                    {!!Form::open(['action' => 'PurchaseController@store', 'method' => 'POST'])!!}
                    {{Form::hidden('post_id', $post->id)}}
                    {{Form::submit('Confirm', ['class' => 'btn btn-primary'])}}
                    <a href="{{url('/posts/'.$post->id)}}" class="btn btn-danger">Go Back</a>
                    {!!Form::close()!!}         
                </td>
            </tbody>
        </table>
    </div>
</div>
@endsection
