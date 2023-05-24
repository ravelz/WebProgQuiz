<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PublisherController extends Controller
{
    //
    public function showPublisher(){
        $getData = DB::table('publishers')
        ->get();
        return view('publisher', ['datas' => $getData]);
    }
}
