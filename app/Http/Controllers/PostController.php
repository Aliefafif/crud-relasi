<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;


class PostController extends Controller
{
  public function menampilkan(){
    $posts = post::all();

    return view('tampil_post',compact('posts'));
  } 
}
