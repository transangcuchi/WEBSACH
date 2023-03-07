<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Category;
use App\Http\Controllers\Controller;
use App\Publisher;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class SanphamController extends Controller
{
    public function Index()
    {
        $sanphams = Book::orderBy('book_id')->paginate(6);
        return view('admin.sanpham', compact('sanphams'));
    }

    public function AddSanPham()
    {
        $loais = Category::all();
        $loaipubs = Publisher::all();
        return view('admin.themsanpham', [
            'loais' => $loais,
            'loaipubs' => $loaipubs
        ]);
    }

    public function StoreSanpham(Request $request)
    {
        $request->validate([
            'book_id' => 'required|unique:books',
            'book_name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'cat_id' => 'required',
            'pub_id' => 'required',
            'img' => 'required|image|mimes:jpg,png,jpeg|max:5048',
        ]);

        $img = $request->file('img');
        $ten_hinh = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
        $request->img->move(public_path('images/book'), $ten_hinh);
        $img_url = $ten_hinh;



        Book::insert([
            'book_id' => $request->book_id,
            'book_name' => $request->book_name,
            'price' => $request->price,
            'description' => $request->description,
            'cat_id' => $request->cat_id,
            'pub_id' => $request->pub_id,
            'img' => $img_url,
            'updated_at'=> Carbon::now(),
        ]);


        return redirect()->route('sanpham')->with('message', 'Thêm sản phẩm thành công!');
    }


    public function EditSanpham($id)
    {
        $thongtinsanpham = Book::findOrFail($id);
        $loais = Category::all();
        $loaipubs = Publisher::all();
        return view('admin.editsanpham', [
            'loais' => $loais,
            'loaipubs' => $loaipubs,
            'thongtinsanpham' => $thongtinsanpham
        ]);
    }

    public function UpdateSanpham(Request $request)
    {
        $productid = $request->id;

        $request->validate([
            'book_name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'cat_id' => 'required',
            'pub_id' => 'required',
        ]);

        $maloai = $request->cat_id;
        $tenloai = Category::Where('cat_id', $maloai)->value('cat_id');
        $maloaipub = $request->pub_id;
        $tenloaipub = Publisher::Where('pub_id', $maloaipub)->value('pub_id');


        Book::findOrFail($productid)->update([
            'book_name' => $request->book_name,
            'price' => $request->price,
            'description' => $request->description,
            'cat_id' => $tenloai,
            'pub_id' => $tenloaipub
        ]);

        return redirect()->route('sanpham')->with('message', 'Sửa thông tin sản phẩm thành công!');
    }

    public function XoaSanpham($id)
    {
        Book::findOrFail($id)->delete();

        return redirect()->route('sanpham')->with('message', 'Xóa sản phẩm thành công!');
    }

    public function EditHinhSanpham($id)
    {
        $thongtinsanpham = Book::findOrFail($id);

        return view('admin.edithinhsanpham',compact('thongtinsanpham'));
    }

    public function UpdateHinh(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpg,png,jpeg|max:5048',
        ]);


        $id=$request->id;
        $img = $request->file('img');
        $ten_hinh = hexdec(uniqid()).'.'. $img->getClientOriginalExtension();
        $request->img->move(public_path('images/book'), $ten_hinh);
        $img_url=$ten_hinh;

        Book::findOrFail($id)->update([
            'img' => $img_url,
        ]);
        return redirect()->route('sanpham')->with('message','Đổi hình sản phẩm thành công!');
    }
}
