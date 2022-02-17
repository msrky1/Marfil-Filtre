<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HizmetlerController extends Controller
{
public function sikayet()
{

return view('hizmetler.sikayet');


}


public function garanti()
{

return view('hizmetler.garanti');


}

public function teklifal()
{

return view('hizmetler.teklif');

}



}
