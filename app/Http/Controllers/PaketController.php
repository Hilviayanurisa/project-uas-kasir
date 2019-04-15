<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    public function index()
    {
        $paket = DB::table('paket')->get();
        return view('paket',['paket'=>$paket]);
    }

    
    public function tambah()
    {
	    return view('tambah');
 
    }

    
    public function store(Request $request)
    {
	
	    DB::table('paket')->insert([
		    'name' => $request->name,
		    'detail' => $request->detail,
            'price' => $request->price,
            'type' => $request->type,
	    ]);
	    return redirect('paket');
 
    }
}
