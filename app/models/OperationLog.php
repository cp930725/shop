<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class OperationLog extends Model
{
    protected $table = 'admin_operation_log';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';

    public function admin()
    {
    	return $this->belongsTo('App\models\Admin', 'admins_id');
    }
}
