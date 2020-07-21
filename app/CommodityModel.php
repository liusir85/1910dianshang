<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommodityModel extends Model
{
    public $table = 'p_goods';
    public $primaryKey = 'goods_id';
    public $timestamps = false;
}
