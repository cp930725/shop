<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';

    public function ordersUserAddr()
    {
    	return $this->belongsTo('App\models\UserAddr', 'user_addr_id');
    }

	public function ordersInfo()
    {
    	return $this->hasMany('App\models\OrderInfo', 'orders_id');
    }
}
