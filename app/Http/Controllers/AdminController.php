<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Language;
use App\Models\Post;


class AdminController extends Controller
{

    public function dilekle($language , $slug){



        $posts = Post::where('slug' , $slug)->first() ?? abort(403,'Kayboldun Sanırım');

        $data['posts'] = $posts;


        return view('product.ekle',$data);


         }

    public function dileklendi(Request $request){

        if (Auth::check())
        {

         $ekle=new Language();
        $ekle->post_id = $request->input('post_id');
        $ekle->tr = $request->input('tr');
        $ekle->en = $request->input('en');
        $ekle->sa = $request->input('sa');
        $ekle->ru = $request->input('ru');
        $ekle->fr = $request->input('fr');



        $ekle->save();

        return redirect()->back()->with('messagelink' , 'Özellikler Eklendi');

     }

    }


    public function deleteLink($language, $id)

    {

        $post = Language::find($id);

        $post->delete();
        return redirect()->back();

    }


    public function galery()

    {

        return view('slider.galery');

    }
}
