<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::all();
        return view('home', compact(['books']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $book = Book::where('books.id', $id)->first();
        $publisher = Publisher::where('id', $book->publisher_id)->first();
        $category = DB::table('categories')
            ->leftJoin('book_category', 'book_category.category_id', '=', 'categories.id')
            ->where('book_category.book_id', '=', $id)->get();
        return view('bookDetail', compact(['book', 'category', 'publisher']));
    }

    public function bookByCategory($categoryId)
    {
        //
        //$book = Book::where('id', $id)->first();
        $bookCategories = DB::table('books')
            ->leftJoin('book_category', 'book_category.book_id', '=', 'books.id')
            ->where('book_category.category_id', '=', $categoryId)->get();
        $category = Category::where('id', $categoryId)->first();
        //dd($bookCategories);
        //dd($bookCategories);
        return view('bookByCategory', compact(['bookCategories', 'category']));
    }

}
