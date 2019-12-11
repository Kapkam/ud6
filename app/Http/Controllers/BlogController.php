<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    public function index(){
      $posts = Post::all();
      $categories = Category::all();

      return view('layouts.blog.index',['posts'=>$posts,'categories'=>$categories]);
    }
}
