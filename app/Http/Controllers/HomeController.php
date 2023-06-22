<?php

namespace App\Http\Controllers;

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
}
