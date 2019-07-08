<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Vehicles extends Model
{
    use SoftDeletes;
    protected $fillable = ['brand', 'model', 'version','door','power','fuel', 'distance', 'price','date','boite','place', 'option','description', 'sold'];
    protected $dates = ['deleted_at'];
}
