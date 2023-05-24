<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DetailPublisherController extends Controller
{
    public function showPublisher($book){
        $publisherData = DB::table('books')
        ->join('publishers', 'publishers.id', '=', 'books.publisher_id')
        ->where('publishers.id', '=', $book)
        ->select('books.*', 'publishers.name', 'address', 'phone', 'email')
        ->get();
        // dd($publisherData);
        return view('detailpublisher',['book' => $publisherData, 'first' => $publisherData[0]]);
    }
}
