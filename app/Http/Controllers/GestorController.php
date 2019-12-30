<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Category;
class GestorController extends Controller
{
  public function __construct(){
    //
    $this->middleware('role:editor');
  }
  public function index(){
    $user = Auth::user();
    $posts = Post::where('user_id', $user->id)->get();
    return view('layouts.editor')->with('posts', $posts);
  }
  public function show($id){
    $post = Post::find($id);
    return view('layouts.editorShow')->with('post', $post);
  }
  public function create(){
    $category = Category::all();
    $post = new Post;
    $btnText = 'Crear';
    return view('layouts.editorCreate')->with('post', $post)->with('categories', $category)->with('btnText', $btnText);
}
  public function update(Request $request){
     $post=Post::find($request->post_id);
     $post->title=$request->title;
     $post->excerpt=$request->excerpt;
     $post->body=$request->body;
     $post->image=$request->image;
     $post->category_id=$request->category;
     $post->user_id=Auth::user()->id;
     $post->save();
     return redirect(route('editor'));
   }
   public function store(Request $request){
     $post=new Post;
     $post->title=$request->title;
     $post->excerpt=$request->excerpt;
     $post->body=$request->body;
     $post->image=$request->image;
     $post->category_id=$request->category;
     $post->user_id=Auth::user()->id;

     $post->save();
     return redirect(route('editor'));
   }
   public function edit($id){
     $category=Category::all();
     $post=Post::find($id);
     $btnText='Actualizar';
     return view('layouts.editorEdit')->with('post',$post)->with('categories',$category)->with('btnText',$btnText);
   }
   public function destroy($id){
     $post= post::find($id);
     $post->delete();
     return redirect(route('editor'));
   }
}
