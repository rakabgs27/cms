<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $datas = Post::all();
        return view('index',['datas'=>$datas]);
    }
}