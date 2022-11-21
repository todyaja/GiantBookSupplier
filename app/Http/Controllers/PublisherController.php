<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publisher = Publisher::all();

        return view('publisher', compact(['publisher']));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $publisher = Publisher::where('id', $id)->first();
        $books = Book::where('publisher_id', $id)->get();

        return view('publisherDetail', compact(['publisher', 'books']));
    }
}
