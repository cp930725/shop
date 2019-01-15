<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class GoodsInfo extends Model
{
    protected $table = 'goods_info';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';
}
