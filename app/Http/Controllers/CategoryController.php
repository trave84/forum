<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')
            ->orderBy('name', 'asc')
            ->get();
        // dd($categories); // DIE HERE

        
        // PREPARE $view=(url/file,['view_data'])     view('FILE_NAME', 'NAME'=>$QUERY_DATA)
        $view =  view('categories/index', [
            'categories' => $categories
        ]   );
        
        // RETURNS: $view_data TO the views_file.php 
        return $view;
    }
}
