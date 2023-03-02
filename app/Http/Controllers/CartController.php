<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\News;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (!isset($_SESSION))
            session_start();
        $books = array();
        if($_SESSION!=null)
        {
            var_dump($_SESSION);
        foreach ($_SESSION['gio'] as $id) {
            $books[] = Book::find($id);
        }
    }
        $category = Category::all();
        return view("components.cart", [
            'books' => $books,
            'category' => $category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        if (!isset($_SESSION))
        {
            session_start();
            $_SESSION['gio'][] = $id;
        }            
        $book = Book::find($id);
        if ($book == null) {
            return redirect(route('index'));
        } else {
            $_SESSION['gio'][] = $id;        
            return redirect(route('cartindex'));
        }
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

    public function clearcart()
    {
        session_destroy();
        return redirect(route('cartindex'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        echo "<script>alert('Đã xóa!') </script>";
        return redirect(route('index'));
    }
}
