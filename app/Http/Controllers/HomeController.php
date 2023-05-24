<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //
    public function showHome(){
        $getData = DB::table('books')
        ->get();      
        return view('Home', ['datas' => $getData]);
    }

    public function getBook(){
        return view('Home');

    }
}
