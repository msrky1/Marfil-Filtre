<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class MarfilController extends Controller
{
    public function index(){

        return view('welcome');
    
    
      
    
        return view('welcome', $data);
    }
 
    public function hakkimizda(){

        return view('marfil.hakkimizda');
    }
    
    
    public function iletisim(){

        return view('marfil.iletisim');
    }

    public function kunye()
{

return view('marfil.kunye');

}
public function kalite()
{

return view('marfil.kalite');

}
public function test()
{

return view('test.test');

}


}

