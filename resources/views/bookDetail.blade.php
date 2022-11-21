@extends('master_layout')
@section('PageTitle', $book->title .' Detail')
@section('content')
    <h2>Book Detail</h2>
    <div class="w-100 d-flex justify-content-center">
        <img style="width: 300px; height: 450px" src="{{ asset('assets/' . $book->image) }}">
    </div>
    <div class="mt-5">
        <p>Title : {{ $book->title }}</p>
        <p>Category :
            @foreach ($category as $c)
                @if (!$loop->first)
                    ,
                @endif
                {{ $c->name }}
            @endforeach
        </p>
        <p>Author : {{ $book->author }}</p>
        <p>Publisher : {{ $publisher->name }}</p>
        <p>Year : {{ $book->year }}</p>
        <p>Synposis : </p>
        <p>{{ $book->synopsis }}</p>
    </div>

@endsection()
