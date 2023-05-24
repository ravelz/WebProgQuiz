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
        // dd($book);
        $publisherData = DB::table('publishers')
        ->join('books', 'books.publisher_id', '=', 'publishers.id')
        ->where('books.id', '=', $book)
        ->get();
        // dd($publisherData);
        return view('detail',['book' => $publisherData]);
    }
}
