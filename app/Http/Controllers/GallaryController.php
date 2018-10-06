<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Category;
use App\Post;
use Auth;
use DB;

class GallaryController extends Controller
{
    public function store()
    {
    	return view('store')->with('category',Category::all());
    }


    public function index()
    {
      $id = Auth::user()->id;
      if(Auth::user()->role==1){
        return view('home')->with('post',Post::all());
      }

      return view('home')
        ->with('post', Post::where('user_id', $id)->get());
    }









    public function imageinsert(Request $request)
    {
        $r = request();

       $this->validate($r,[

          'imagename'=>'required',
          'description'=>'required',
          'image'=>'required'

       ]);



        if($request->file('image'))
        {
            $image = $request->file('image');
            $image_filename = $image->getClientOriginalName();
            $image->move(public_path('image'),$image_filename);
        }

     Post::create([
        'imagename' => $request->imagename,
        'image' => $image_filename,
        'description' => $request->description,
        'cetagory_id' => $request->cetagory,
        'user_id' => Auth::user()->id,
        'author_name' => Auth::user()->name
     ]);

Session::flash('message', 'Insert Successfully');
     return redirect()->back();

    }

    public function edit($id)
    {
      return view('edit')
      ->with('p',Post::find($id))
      ->with('category',Category::all());
    }

    public function imageupdate(Request $request,$id)
    {
       $r = request();
       $this->validate($r,[
        'imagename'=>'required',
          'description'=>'required'
       ]);

        if(!$request->file('image'))
        {
            

            $post = Post::find($id);
            $post->imagename = $request->imagename;
            $post->description = $request->description;
            $post->cetagory_id = $request->cetagory;
            $post->save();
        }else{

          $image = $request->file('image');
            $image_filename = $image->getClientOriginalName();
            $image->move(public_path('image'),$image_filename);

           $post = Post::find($id);
            $post->imagename = $request->imagename;
            $post->description = $request->description;
            $post->cetagory_id = $request->cetagory;
            $post->image = $image_filename;
            $post->save();

        }

        Session::flash('message', 'update Successfully');
     return redirect()->route('home');



       
    }

    public function imagedelete($id)
    {
      $post = Post::find($id);
      $post->delete();


        Session::flash('message', 'delete Successfully');
     return redirect()->route('home');
    }
}
