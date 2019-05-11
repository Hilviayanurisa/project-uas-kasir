<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\OrderdetailModel;
use App\AllMenuModel;
use App\OrderModel;


class DetailController extends Controller
{
    public function index()
    {
        $order_detail = OrderdetailModel::with(['orders', 'allmenus'])
        ->join('allmenu','allmenu.id','=','order_detail.id_allmenu_fk')
        ->select('*', DB::raw("price * quantity as subtotal"))
        ->get();
        return view('detail', compact('order_detail'));
    }

    
    public function tambah()
    {
	    //mengambil data
        $order = OrderModel::orderBy('id','ASC')->get();
        $allmenu = AllMenuModel::orderBy('id','ASC')->get();

        //mengirim data
       return view('detailform', compact('order','allmenu'));
 
    }

    
    public function store(Request $request)
    {
	
	    DB::table('order_detail')->insert([
		    'id_orders_fk' => $request->id_orders_fk,
            'id_allmenu_fk' => $request->id_allmenu_fk,
            'quantity' => $request->quantity,
            'note' => $request->note,
	    ]);
	    return redirect('detail');
 
    }

    public function edit($id)
    {
	    
        $order_detail = OrderdetailModel::with(['allmenus'])->where('id',$id)->get();
        $allmenu = AllMenuModel::orderBy('id', 'ASC')->get();
	    return view('detailedit', compact('allmenu', 'order_detail'));
 
    }
  
    public function update(Request $request, $id)
    {

	    DB::table('order_detail')->where('id', $id)->update([
            'id_orders_fk' => $request->id_orders_fk,
            'id_allmenu_fk' => $request->id_allmenu_fk,
            'quantity' => $request->quantity,
            'note' => $request->note,
	    ]);
	
	    return redirect('/detail');
    }

    public function hapus($id)
    {

	DB::table('order_detail')->where('id',$id)->delete();
	return redirect('/detail');
    }
}
