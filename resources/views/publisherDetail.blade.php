@extends('master_layout')
@section('PageTitle', $publisher->name.' Detail')
@section('content')
    <h2>Publisher Detail</h2>
    <div class="w-100 d-flex justify-content-center">
        <img style="width: 600px; height: 800px" src="{{ asset('assets/' . $publisher->image) }}">
    </div>
    <div class="mt-5">
        <p>Name : {{$publisher->name}}</p>
        <p>Address : {{$publisher->address}}</p>
        <p>Phone : {{$publisher->phone}}</p>
        <p>Email : {{$publisher->email}}</p>
    </div>
    <h2>{{$publisher->name}} Books</h2>
    <div class="row">
        @foreach ($books as $b)
            <div class="col-sm-12 col-md-6 col-xl-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('assets/'.$b->image)}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$b->title}}</h5>
                      <p class="card-text">{{Str::limit($b->synopsis, 50)}}</p>
                      <p class="card-text">By : {{$b->author}}</p>
                      <a href="{{url('book/'.$b->id)}}" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>

@endsection()
