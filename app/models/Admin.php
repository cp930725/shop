<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U'; 

    public function adminInfo()
    {
    	return $this->hasOne('\App\models\AdminInfo', 'admins_id');
    }

    public function adminLoginLog()
    {
    	return $this->hasMany('\App\models\AdminLoginLog', 'admins_id');
    }
}
