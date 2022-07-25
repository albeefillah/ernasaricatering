<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Backend\Menu;

class FrontEndController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $menupaket = Menu::where('tipe', 'Paket')->skip(0)->take(5)->get();
        $menusatuan = Menu::where('tipe', 'Satuan')->skip(0)->take(5)->get();
        $menuutama = Menu::where('tipe', 'Menu Utama')->skip(0)->take(5)->get();

        return view('frontend.layout.main',compact('menupaket','menusatuan','menuutama'));
    }

    public function gethalamanmenu()
    {
        $menupaket = Menu::where('tipe', 'Paket')->get();
        $menusatuan = Menu::where('tipe', 'Satuan')->get();
        $menuutama = Menu::where('tipe', 'Menu Utama')->get();
        $menu = Menu::where('tipe', 'Paket')->first();

        return view('frontend.menu.index',compact('menupaket','menusatuan','menuutama'));
    }

    public function getsinglemenu($id)
    {
        $menu = Menu::findOrFail($id);
        return view('frontend.menu.single',compact('menu'));
    }
}
