<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($idComment = null, $id = null)
    {
        return view('pages.home');
    }

}
