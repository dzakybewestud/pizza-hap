<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Ramsey\Uuid\Type\Integer;

use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    public function index()
    {
        return view('userHome');
    }

    public function redirect()
    {
        if (!empty(Auth::user()->usertype)) {
            $usertype = Auth::user()->usertype;
            if ($usertype == '1') {
                return app('App\Http\Controllers\AdminController')->view_adminHome();
            } elseif ($usertype == '2') {
                return app('App\Http\Controllers\DriverController')->driver_home();
            } else {
                return view('userHome');
            }
        } else {
            return view('userHome');
        }
    }

    public function view_menus()
    {
        $menu = Menu::all();
        return view('/menus', compact('menu'));
    }

    public function view_cart()
    {
        return view('cart');
    }

    public function add_cart(Request $request, $id)
    {
        $user = Auth::user();
        $menu = Menu::find($id);
        $cart = new Cart();

        $cart->nama_user = $user->name;
        $cart->id_user = $user->id;
        $cart->phone = $user->phone;
        $cart->address = $user->address;

        $cart->nama_menu = $menu->nama_menu;
        $cart->harga = $menu->harga_menu;
        $cart->id_menu = $menu->id;

        $cart->kuantitas = $request->quantity;

        $cart->harga = $menu->harga_menu * $request->quantity;

        $cart->save();
        return redirect()->back();
    }

    public function show_cart()
    {
        $id = Auth::user()->id;
        $user = Auth::user();
        $cart = Cart::where('id_user', '=', $id)->get();

        return view('showCart', compact('cart'), compact('user'));
    }

    public function delete_cart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()
            ->back()
            ->with('status', 'Berhasil Menghapus Menu');
    }

    public function checkout_cart(){
        $user = Auth::user();
        $userid = $user->id;

        $data = Cart::where('id_user', '=', $userid)->get();

        $orderUserId = Order::where('id_user', '=', $userid)->latest()->first();
        if (empty($orderUserId)){
            foreach($data as $data){
                $order = new Order();

                $order->id_user = $data->id_user;
                $order->nama_user = $data->nama_user;
                $order->phone = $data->phone;
                $order->address = $data->address;
                $order->id_menu = $data->id_menu;
                $order->nama_menu = $data->nama_menu;
                $order->kuantitas = $data->kuantitas;
                $order->harga = $data->harga;


                $order->save();

                $id_cart = $data->id;
                $cart = Cart::find($id_cart);
                $cart->delete();
            }
            return redirect()->back()->with('status', 'berhasil melakukan checkout, silahkan ditunggu.');
        } else {
            if ($orderUserId->delivery_status == 'processing' or  $orderUserId->delivery_status == 'diantar'){
                return redirect()->back()->with('alert', 'Tunggu hingga order sebelumnya selesai baru dapat melakukan order baru');
            } else {
                foreach($data as $data){
                    $order = new Order();

                    $order->id_user = $data->id_user;
                    $order->nama_user = $data->nama_user;
                    $order->phone = $data->phone;
                    $order->address = $data->address;
                    $order->id_menu = $data->id_menu;
                    $order->nama_menu = $data->nama_menu;
                    $order->kuantitas = $data->kuantitas;
                    $order->harga = $data->harga;


                    $order->save();

                    $id_cart = $data->id;
                    $cart = Cart::find($id_cart);
                    $cart->delete();
                }
                return redirect()->back()->with('status', 'berhasil melakukan checkout, silahkan ditunggu.');
            }
        }
    }



    public function show_orders(){
        $userid = Auth::user()->id;
        $nama_user = Auth::user()->name;
        // $list_order = Order::groupBy('created_at')->select('created_at')->where('id_user', $userid)->get();
        $list_order = Order::select('created_at', 'delivery_status')->distinct()->where('id_user', $userid)->orderBy('created_at', 'asc')->get();


        // dd($list_order);

        // $order = Order::get()->id;
        return view('showOrders', compact('list_order'));
    }




}
