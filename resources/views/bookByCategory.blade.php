@extends('master_layout')
@section('PageTitle', $category->name . ' Books')
@section('content')
    <h2>{{$category->name}} Books</h2>
    <div class="row mt-5">
        @foreach ($bookCategories as $b)
            <div class="col-sm-12 col-md-6 col-xl-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('assets/'.$b->image)}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$b->title}}</h5>
                      <p class="card-text">{{Str::limit($b->synopsis, 50)}}</p>
                      <p class="card-text">By : {{$b->author}}</p>
                      <a href="{{url('book/'.$b->book_id)}}" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>

@endsection()
