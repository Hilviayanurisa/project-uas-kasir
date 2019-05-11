<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderdetailModel extends Model
{
    //
    protected $table = 'order_detail';
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_orders_fk','id_allmenu_fk','quantity'];

    public function orders(){
        return $this->belongsTo(OrderModel::class, 'id_orders_fk', 'id');
    }

    public function allmenus(){
        return $this->belongsTo(AllMenuModel::class, 'id_allmenu_fk', 'id');
    }

}
