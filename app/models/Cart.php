<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';

    public function goodsinfo()
	{
	        return $this->belongsTo('App\models\GoodsInfo','goods_info_id');
	}
}
