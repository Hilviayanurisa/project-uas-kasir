<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    //
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'table_number'];
    
    public function order_details(){
        return $this->hasMany('App\OrderdetailModel');
    }
}
