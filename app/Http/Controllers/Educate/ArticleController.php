<?php

namespace App\Http\Controllers\Educate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view("educate.article.index");
    }
    
}
