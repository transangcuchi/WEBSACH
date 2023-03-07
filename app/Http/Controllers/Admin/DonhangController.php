<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;

class DonhangController extends Controller
{
    public function Index()
    {
        $orders = Order::all();
        return view('admin.donhang',compact('orders'));
    }

    public function XoaDonhang($id)
    {
        Order::findOrFail($id)->delete();

        return redirect()->route('donhang')->with('message', 'Xóa đơn hàng thành công!');
    }

    public function ChiTietDonhang()
    {
        $orders = OrderDetail::all();
        return view('admin.chitietdonhang',compact('orders'));
    }
}
