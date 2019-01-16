<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
    protected $table = 'water';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';
}
