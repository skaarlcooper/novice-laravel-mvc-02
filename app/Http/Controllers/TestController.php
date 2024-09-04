<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $context = "Home page";
        return view('pages.test', compact('context'));
    }
    public function blog()
    {
        $context = "Blog page";
        return view('pages.test', compact('context'));
    }
    public function User($id = null)
    {
        $context = "User page";
        return view('pages.test', compact('context', 'id'));
    }
}
