<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function showCategory($category){
        $books = DB::table('books')
        ->join('details', 'books.id', '=', 'details.books_id')
        ->where('category_id', '=', $category)
        ->get();
        $name = DB::table('categories')
        ->where('id', '=', $category)
        ->get();
        return view('category', ['datas' => $books, 'name' => $name[0]]);
    }
}
