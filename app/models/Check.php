<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected $table = 'check';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';
    public function orderInfo()
    {
    	return $this->belongsTo('App\models\OrderInfo', 'order_info_id');
    }
}
