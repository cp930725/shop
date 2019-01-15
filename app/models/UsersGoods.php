<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UsersGoods extends Model
{
    protected $table = 'users_goods';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';
}
