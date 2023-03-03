<?php

namespace App\Http\Controllers;

use App\Book;
use App\News;
use App\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('book_name')->paginate(8);
        $category = Category::all();
        $banner = News::all();
        return view('index', [
            'books' => $books,
            'category' => $category,
            'banner' => $banner,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search()
    {
        $books = Book::orderBy('book_name')->search()->paginate(8);
        $category = Category::all();
        return view('search', [
            'category' => $category,
            'books' => $books,
        ]);
    }

    public function bookByCategory($id)
    {
        $category = Category::all();
        $books = Book::where('cat_id',$id)->paginate(8);

        return view('bookbycategory', [
            'category' => $category,
            'books' => $books,
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        $category = Category::all();
        if ($book === null) {
            return view('errors.404');
        } else {
            return view('components.books.detail', [
                'category' => $category,
                'book' => $book,
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
