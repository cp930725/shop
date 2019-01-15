<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class GoodsInfo extends Model
{
    protected $table = 'goods_info';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';

    public function getGoodsImage()
    {
    	return $this->hasMany('App\models\GoodsImage', 'goods_info_id');
    }

    public function goods()
	{
	        return $this->belongsTo('App\models\Goods','goods_id');
	}
}
