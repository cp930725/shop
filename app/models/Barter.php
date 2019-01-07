<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Barter extends Model
{
    protected $table = 'barter';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';

}
