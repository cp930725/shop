<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class OrderInfo extends Model
{
    protected $table = 'order_info';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';

    public function order()
    {
    	return $this->belongsTo('App\models\Order', 'orders_id');
    }
}
