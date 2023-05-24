<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DetailController extends Controller
{
    public function showDetail($book){
        $bookData = DB::table('books')
        ->where('id', '=', $book)
        ->get();
        // dd($bookData);
        $publisherData = DB::table('publishers')
        ->join('books', 'publishers.id', '=', 'books.id')
        ->where('books.id', '=', $book)
        ->get();
        // dd($publisherData);
        return view('detail',['book' => $publisherData]);
    }
}
