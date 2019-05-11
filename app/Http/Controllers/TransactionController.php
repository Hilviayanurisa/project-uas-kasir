<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TransModel;
use App\OrderModel;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = DB::table('transaction')->get();
        return view('transaction',['transaction'=>$transaction]);

    }

    
    public function tambah()
    {
        //mengambil data
        $order = OrderModel::orderBy('id','ASC')->get();

        //mengirim data
        return view('transform', compact('order'));
    }

    
    public function store(Request $request)
    {
	
	    DB::table('transaction')->insert([
            'id'=> $request->id,
		    'id_orders_fk' => $request->id_orders_fk,
		    'status' => $request->status,
	    ]);
	    return redirect('transaction');
 
    }

    public function edit($id)
    {
	    
	    $transaction = DB::table('transaction')->where('id',$id)->get();
	    return view('transactionedit',['transaction' => $transaction]);
 
    }
  
    public function update(Request $request)
    {

	    DB::table('transaction')->where('id',$request->id)->update([
		'name' => $request->name,
		'status' => $request->status,
	    ]);
	
	    return redirect('/transaction');
    }

    public function hapus($id)
    {

	DB::table('transaction')->where('id',$id)->delete();
	return redirect('/transaction');
    }
}
