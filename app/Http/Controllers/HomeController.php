<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        return view('userHome');
    }

    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '0'){
            return view('userHome');
        } else if ($usertype == '1'){
            return view('admin.adminHome');
        }

    }

    public function view_menus(){
        $menu = Menu::all();
        return view('/menus', compact('menu'));
    }

    public function view_cart(){
        return view('cart');
    }

    public function add_cart(Request $request, $id){
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

    public function show_cart(){
        $id = Auth::user()->id;
            $cart = Cart::where('id_user', '=', $id)->get();
            return view('showCart', compact('cart'));
    }

    public function delete_cart($id){
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->back()->with('status', 'Berhasil Menghapus Menu');
    }
}
