<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class ProductController extends Controller
{
   public function product(){



    $data['posts'] = Post::orderBy('id' , 'DESC')->get();
    $data['categories'] = Category::orderBy('id' , 'DESC')->get();


    return  view('product.urunler', $data);


   }

   public function detail($language , $slug){



    $posts = Post::where('slug' , $slug)->first() ?? abort(403,'Kayboldun Sanırım');

    $data['posts'] = $posts;


    return view('product.detail',$data);


     }

public function category($language , $slug){

   $category = Category::where('slug' , $slug )->first();
   if(is_null($category)){
     return redirect()->back();
   }
    $data['category'] = $category;

    $data['categories'] = Category::OrderBy('id', 'DESC')->get();


    $data['posts'] = Post::where('category_id' , $category->id)->orderBy('category_id',  'DESC')->paginate(10);
    return view('product.categorylist' , $data );

  }
}
