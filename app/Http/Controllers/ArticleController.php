<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($id){
        return "Ini adalah halaman Artikel dengan ID : $id";
    }
}
