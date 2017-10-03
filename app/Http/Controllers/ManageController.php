<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function index()
    {
    	return redirect()->route('manage.dashboard');
    }

    public function dashboard()
    {
        $articles = Article::all();
    	return view('manage.dashboard')->withArticles($articles);
    }
}