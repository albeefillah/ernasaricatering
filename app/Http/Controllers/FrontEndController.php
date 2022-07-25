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
        $menu = Menu::all();

        return view('frontend.layout.main',compact('menu'));
    }

    public function gethalamanmenu()
    {
        $menu = Menu::all();
        return view('frontend.menu.index',compact('menu'));
    }

    public function getsinglemenu()
    {
        return view('frontend.menu.single');
    }
}
