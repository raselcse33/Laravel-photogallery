<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PhotoController extends Controller
{
    public function index()
    {
    	return view('welcome')
    	  ->with('post',Post::all())
    	  ->with('category',Category::all());
    }

    public function list($id)
    {
    	return view('categorylist')->with('post',Post::where('cetagory_id',$id)->get())->with('category',Category::all());
    }


    public function details($id)
    {
    	$post = Post::find($id);
    	$cetagoryid = $post->cetagory_id;
    	return view('detailsimage')->with('post',$post)
    	->with('samepost',Post::where('cetagory_id',$cetagoryid)->get());
    }
}
