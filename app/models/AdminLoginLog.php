<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class AdminLoginLog extends Model
{
    protected $table = 'admin_login_log';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U'; 

    public function operationLog()
    {
    	return $this->hasMany('App\models\OPerationLog', 'admins_id');
    }

    public function admin()
    {
    	return $this->belongsTo('App\models\Admin', 'admins_id');
    }
}
