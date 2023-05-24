<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DetailController extends Controller
{
    public function showDetail($book){
        dd($book);
        return view('detail',['book' => $book]);
    }
}
