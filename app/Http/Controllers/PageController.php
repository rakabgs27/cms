<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
       return "Hi! Selamat Datang di Website Laravel ";
    }

    public function about(){
        return "2041720187 <br> Raka Bagas Fitriansyah <br> TI-2G";
    }

    public function articles($id){
        return "Ini adalah halaman Artikel dengan ID : $id";
    }
}
