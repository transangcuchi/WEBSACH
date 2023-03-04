<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\News;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clearcart()
    {
        if (!isset($_SESSION))
            session_start();
        return view('components.destroy');
    }
    public function index()
    {
        if (!isset($_SESSION))
            session_start();
        $books = array();
        if ($_SESSION != null) {
            foreach ($_SESSION['gio'] as $id) {
                $books[] = Book::find($id);
            }
        }
        $category = Category::all();
        //session_destroy();
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
        if(!isset($_SESSION)) {
            session_start();
            $book = Book::find($id);
            if ($book == null) {
                return redirect(route('index'));
            }
            if($_SESSION!=null) 
            {
                foreach($_SESSION['gio'] as $value) {
                    if ($value == $id) {
                        return redirect(route('cartindex'));
                    }
                }
            }                 
            $_SESSION['gio'][] = $id;
            return redirect(route('cartindex'));
        }
        foreach($_SESSION['gio'] as $value) {
            if ($value == $id) {
                return redirect(route('cartindex'));
            }
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
        if (!isset($_SESSION))
            session_start();
        $giomoi = array();
        foreach ($_SESSION['gio'] as $value) {
            if ($value != $id) {
                $giomoi[] = $value;
            }
        }
        $_SESSION['gio'] = $giomoi;
        return redirect(route('cartindex'));
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
}
