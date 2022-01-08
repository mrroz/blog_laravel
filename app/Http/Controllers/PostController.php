<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{



    public function add(){

        $posts =Post::all();

        return view('dashboard',['posts'=>$posts->reverse()]);


    }



    public function create(Request $request){

       // dd($request->all()) ;

       $file = time().'.'.$request->file->getClientOriginalExtension();
       $request->file->move(base_path('storage/app/public'),$file);


     $new= Post::create([

            "title" => 'فروشي',
            "price" => $request->price,
            "address" => $request->address,
            "type" => $request->type,
            "measurement" => $request->measurement,
            "rooms" => $request->rooms,
            "year" => $request->year,
            "description" => $request->description,
            "file" =>'storage/'.$file,

        ]);

        return  redirect()->route('post.add')->with('msg','اضاف شد');
    }



    public function show(){

        $posts =Post::all();
        return view('all',['posts'=>$posts->reverse()]);
     }



     public function delete(Post $post){


      // return 'delete';

      //\File:delete($post->file);

       $p= $post->delete();
       //dd($p);
       return  redirect()->route('post.add')->with('msg','حذف شد');



    //    if($post->delete()) {
    //     //return 'deleted';
    //     dd($p);
    // }


     }

    }

