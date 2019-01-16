<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Slid extends Model
{
    protected $table = 'slids';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';
}
