<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'links';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';
}
