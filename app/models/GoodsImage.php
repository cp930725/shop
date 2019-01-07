<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class GoodsImage extends Model
{
    protected $table = 'goods_image';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';
}
