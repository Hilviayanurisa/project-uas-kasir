<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllMenuModel extends Model
{
    protected $table = 'allmenu';
    protected $primaryKey = 'id';
    
    public function order_details(){
        return $this->hasMany('App\OrderdetailModel');
    }
}
