<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function driver_home(){
        $order = Order::select('created_at', 'delivery_status', 'nama_user', 'id_user', 'address', 'phone')->distinct()->orderBy('created_at', 'asc')->get();


        // dd($list_order);

        // $order = Order::get()->id;
        return view('driverHome', compact('order'));
    }

    public function status($nama_user){
        $order = Order::where('nama_user', $nama_user)->get();

        foreach ($order as $order){
            if ($order->delivery_status == "processing"){
                $order->delivery_status = "diantar";
            } else if ($order->delivery_status == "diantar"){
                $order->delivery_status = "done";
            }

            $order->save();

        }
        return redirect()->back();
    }
}
