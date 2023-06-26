<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_adminMenu(){
        $menu = Menu::all();
        return view('admin.adminMenu', compact('menu'));
    }

    public function add_menu(Request $request){
        $menu = new Menu();

        $menu->nama_menu = $request->nama_menu;
        // $data->nama_menu (buat kolom nama_menu di database) $request->nama_menu; (diambil dari form input yang punya name 'nama_menu')
        $menu->harga_menu = $request->harga_menu;


        $gambar_menu = $request->gambar_menu;
        $nama_gambar = time().'.'.$gambar_menu->getClientOriginalExtension();
        $gambar_menu->move('menu', $nama_gambar);
        $menu->gambar_menu = $nama_gambar;

        $menu->save();
        return redirect()->back()->with('status', 'Berhasil Menambahkan Menu');
    }

    public function edit_menu($id){
        $menu = Menu::find($id);

        return view('admin.editMenu', compact('menu'));
    }

    public function edit_menu_confirm(Request $request, $id){
        $menu = Menu::find($id);


        $menu->nama_menu = $request->nama_menu;
        $menu->harga_menu = $request->harga_menu;

        $gambar_menu = $request->gambar_menu;
        if ($gambar_menu){
            $nama_gambar = time().'.'.$gambar_menu->getClientOriginalExtension();
            $gambar_menu->move('menu', $nama_gambar);
            $menu->gambar_menu = $nama_gambar;
        }

        $menu->save();
        return redirect('/admin-menu')->with('status', 'Berhasil Melakukan Update Menu');

    }

    public function delete_menu($id_menu){
        $data = Menu::where('id_menu', $id_menu);
        $data->delete();

        return redirect()->back()->with('status', 'Berhasil Menghapus Menu');
    }

    public function view_adminUser(){
        $users = User::all()
            ->where('usertype', 0);
        return view('admin.adminUser', compact('users'));
    }

    public function edit_user($id){
        $user = User::find($id);

        return view('admin.editUser', compact('user'));
    }

    public function edit_user_confirm(Request $request, $id){
        $user = User::find($id);


        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;


        $user->save();
        if($user->usertype == '2'){
            return redirect('/admin-driver')->with('status', 'Berhasil Melakukan Update Driver');
        } else {
            return redirect('/admin-user')->with('status', 'Berhasil Melakukan Update User');
        }


    }

    public function delete_user($id){
        $data = User::where('id', $id);
        $data->delete();

        return redirect()->back()->with('status', 'Berhasil Menghapus User');
    }

    public function view_adminDriver(){
        $users = User::all()
            ->where('usertype', 2);
        return view('admin.adminDriver', compact('users'));
    }

    public function edit_driver($id){
        $user = User::find($id);

        return view('admin.editDriver', compact('user'));
    }

    public function delete_driver($id){
        $data = User::where('id', $id, 'usertype', 2);
        $data->delete();

        return redirect()->back()->with('status', 'Berhasil Menghapus Driver');
    }

    public function view_adminOrder(){
        $orders = Order::all();
        return view('admin.adminOrder', compact('orders'));
    }

    public function view_adminHome(){
        $orders = Order::all();
        return view('admin.adminHome', compact('orders'));
    }
}
