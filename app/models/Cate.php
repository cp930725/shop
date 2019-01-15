<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'cates';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $dateFormat = 'U';

    static public function getCates($cates=[], $id=0)
    {
        if(empty($cates)) {
            $cates = self::all();
        }

        $new_cates=[];
        foreach($cates as $k=>$v) {
            if($v->pid==$id) {
                $v->sub = self::getCates($cates, $v->id);
                $new_cates[] = $v;
            }
        }
        return $new_cates;
    }
}
