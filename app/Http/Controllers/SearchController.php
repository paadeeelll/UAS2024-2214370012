<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request) {
        $search = $request->input('search');
        $articles = Article::whereRaw("MATCH(title, content) AGAINST(? IN BOOLEAN MODE)", [$search])->get();
        return view('articles.index', compact('articles'));
    }
    
}
