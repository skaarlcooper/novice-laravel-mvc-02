<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index($id = null)
    {
        $context = $id > 10 ? "Greater than 10" : "Less than 10";
        return view('pages.products', compact('context'));
    }
}
