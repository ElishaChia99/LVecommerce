@extends('layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>{{$post->title}}</h1>
            <a href="{{url('/home')}}" class="btn btn-primary ">Go Back</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">User Name</th>
                        <th scope="col">User Email</th>
                        <th scope="col">Request date</th>
                        <th scope="col">Purchase status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($purchase) > 0)
                    <?php $i = 0; ?>
                    @foreach ($purchase as $purchases)
                    <?php $i = $i + 1; ?>
                    <tr>
                        <th scope="row">{{$i}}</th>
                        <td>{{$purchases->user->name}}</td>
                        <td>{{$purchases->user->email}}</td>
                        <td>{{$purchases->created_at}}</td>
                        <td>{{$purchases->purchase_status}}</td>
                        @if($purchases->purchase_status === "Payment have not complete.")
                        <td>
                            {!!Form::open(['action' => ['PurchaseController@Paid', $purchases->id], 'method' => 'POST'])!!}
                            {{Form::hidden('paid', 'Paid, delivering product. Please wait.')}}
                            {{Form::submit('Paid', ['class' => 'btn btn-success'])}}
                            {!!Form::close()!!}         
                        </td>
                        @else
                        <td>
                            {!!Form::open(['action' => ['PurchaseController@Paid', $purchases->id], 'method' => 'POST'])!!}
                            {{Form::hidden('paid', 'Payment have not complete.')}}
                            {{Form::submit('Unpaid', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}    
                        <td>
                        @endif
                    </tr>
                        {{-- {{$purchase->post->id}} --}}

                    @endforeach
                @else
                    <p>No Purchase Record</p>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection