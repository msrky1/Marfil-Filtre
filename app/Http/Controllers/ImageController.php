<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Image;

class ImageController extends Controller
{
   public function addimage(Request $request){



        $size = $request->file('image')->getSize();

        $name = $request->file('image')->getClientOriginalName();
        $post_id = $request->input('post_id');


        $request = $request->file('image')->storeAs('images' , $name);

        $photo = new Image();

        $photo->images = $name;
        $photo->size = $size;
        $photo->post_id = $post_id;
        $photo->save();
         return redirect()->back();

   }

   public function deleteImage($Language ,  $id){


      $photo = Image::find($id);

      $photo->delete();
      return redirect()->back();



   }
}
