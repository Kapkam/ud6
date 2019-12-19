<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
class PostController extends Controller
{
    public function __construct(){
      $this->middleware(['auth','role:user']);
    }
    public function index(){

      $user = Auth::user();
      $posts = Post::where('user_id',$user->id)->get();
      return view('posts.index')->with('posts',$posts);
    }

    public function create(){

    }

    public function update(){

    }

    public function delete(){

    }
}
