<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Returns extends Model
{
    protected $table = 'returns';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';

}