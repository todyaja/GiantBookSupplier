@extends('master_layout')
@section('PageTitle', 'Publisher')
@section('content')
    <h2>Publisher List</h2>

    <div class="row">
        @foreach ($publisher as $p)
            <div class="col-sm-12 col-md-6 col-xl-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('assets/'.$p->image)}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$p->name}}</h5>
                      <p class="card-text">{{$p->address}}</p>
                      <a href="{{url('publisher/'.$p->id)}}" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>

@endsection()
