<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index')->with('categories', $categories);
    }

}
