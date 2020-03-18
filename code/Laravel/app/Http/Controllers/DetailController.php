<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function book_data()
    {
        return view('book_site.datail');
    }
}
