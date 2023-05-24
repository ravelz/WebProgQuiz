<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NavbarController extends Controller
{
    public function getNavItems(){
        $navItem = DB::table('categories')
        ->get();
        return $navItem;
    }
}
