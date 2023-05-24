<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DetailPublisherController extends Controller
{
    public function showPublisher($book){
        $publisherData = DB::table('publishers')
        ->join('books', 'publishers.id', '=', 'books.id')
        ->where('publishers.id', '=', $book)
        ->get();
        // dd($publisherData[0]);
        return view('detailpublisher',['book' => $publisherData, 'first' => $publisherData[0]]);
    }
}
