<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U'; 

    public function userInfo()
    {
    	return $this->hasOne('\App\models\UserInfo', 'users_id');
    }

    public function usersGoods()
    {
        return $this->belongsToMany('App\models\Goods','users_goods','users_id','goods_id');
    }

    public function order()
    {
        return $this->hasMany('App\models\Order', 'users_id');
    }
}
