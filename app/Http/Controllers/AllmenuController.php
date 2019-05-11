<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllmenuController extends Controller
{
    public function index()
    {
        $allmenu = DB::table('allmenu')->get();
        return view('allmenu',['allmenu'=>$allmenu]);
    }

    
    public function tambah()
    {
	    return view('menuform');
 
    }

    
    public function store(Request $request)
    {
	
	    DB::table('allmenu')->insert([
		    'name' => $request->name,
		    'type' => $request->type,
		    'price' => $request->price,
	    ]);
	    return redirect('/allmenu');
 
    }

    public function edit($id)
    {
	    
	    $allmenu = DB::table('allmenu')->where('id',$id)->get();
	    return view('allmenuedit',['allmenu' => $allmenu]);
 
    }
  
    public function update(Request $request)
    {

	    DB::table('allmenu')->where('id',$request->id)->update([
		'name' => $request->name,
		'type' => $request->type,
		'price' => $request->price
	    ]);
	
	    return redirect('/allmenu');
    }

    public function hapus($id)
    {

	DB::table('allmenu')->where('id',$id)->delete();
	return redirect('/allmenu');
    }
}
