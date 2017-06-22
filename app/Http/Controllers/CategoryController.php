<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAll(){
       $categories =  Category::all();
        dd($categories);
    }
}
