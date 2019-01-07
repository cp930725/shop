<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UserAddr extends Model
{
    protected $table = 'user_addr';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';

 
}
