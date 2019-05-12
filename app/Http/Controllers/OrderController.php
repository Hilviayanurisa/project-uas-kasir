<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\OrderModel;
use App\OrderdetailModel;

class OrderController extends Controller
{
    public function index()
    {
        $order = DB::table('order')->get();
        return view('order',['order'=>$order]);
    }



    public function tambah()
    {
	    return view('orderform');
 
    }

    
    public function store(Request $request)
    {
	
	    DB::table('order')->insert([
		    'table_number' => $request->table_number
	    ]);
	    return redirect('order');
 
    }

    public function edit($id)
    {
	    
	    $order = DB::table('order')->where('id',$id)->get();
	    return view('orderedit',['order' => $order]);
 
    }
  
    public function update(Request $request)
    {

	    DB::table('order')->where('id',$request->id)->update([
		'table_number' => $request->table_number,
		'total' => $request->total,
	    ]);
	
	    return redirect('/order');
    }

    public function hapus($id)
    {

	DB::table('order')->where('id',$id)->delete();
	return redirect('/order');
    }
}
