<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';

    public function goods()
	{
	    return $this->belongsTo('App\models\Goods','goods_id');
	}
}
