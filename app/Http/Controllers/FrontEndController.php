<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
 
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
        return view('frontend.layout.main');
    }

    public function gethalamanmenu()
    {
        return view('frontend.menu.index');
    }
}