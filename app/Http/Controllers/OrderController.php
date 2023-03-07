<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Index()
    {
        $category = Category::all();
        if (!isset($_SESSION))
            session_start();
        $books = array();
        if ($_SESSION != null) {
            foreach ($_SESSION['gio'] as $id) {
                $books[] = Book::find($id);
            }
        }
        return view('checkout', compact('category', 'books'));
    }

    public function StoreDonhang(Request $request)
    {
        $request->validate([
            'email' => 'email:rfc,dns',
            'consignee_name' => 'required',
            'consignee_add' => 'required',
            'consignee_phone' => 'required',
        ]);

        $order_id = rand();

        Order::insert([
            'order_id' => $order_id,
            'email' => $request->email,
            'consignee_name' => $request->consignee_name,
            'consignee_add' => $request->consignee_add,
            'consignee_phone' => $request->consignee_phone,
        ]);

        if (!isset($_SESSION))
            session_start();
        if ($_SESSION != null) {
            foreach ($_SESSION['gio'] as $id) {
                $books = Book::find($id);
                OrderDetail::insert([
                    'order_id' => $order_id,
                    'book_id' => $books['book_id'],
                    'price' => $books['price'],
                ]);
            }
        }
        return redirect()->route('index');
    }
}
