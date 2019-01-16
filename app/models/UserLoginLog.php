<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UserLoginLog extends Model
{
    protected $table = 'user_login_log';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';
}
