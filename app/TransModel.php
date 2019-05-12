<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransModel extends Model
{
    //
    protected $table = 'transaction';
    protected $primaryKey = 'id';

    public function transaction(){
        return $this->hasMany('App\TransModel');
    }

    public function orders(){
        return $this->belongsTo(OrderModel::class, 'id_orders_fk', 'id');
    }
}
