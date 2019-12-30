<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index(){
      $users = User::all();
      return view('layouts.admin')->with('users', $users);
    }
    public function edit($id){
      $user=User::find($id);
      return view('layouts.adminUpdate')->with('user',$user);
    }
    public function update(Request $request){
        $user= User::find($request->id);
        $user->role= $request->role;
        $user->save();
        return redirect('/admin');
    }
    public function destroy($id){
      $user= User::find($id);
      $user->delete();
      return redirect('/admin');
    }
}
