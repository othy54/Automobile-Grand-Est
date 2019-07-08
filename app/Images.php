<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Images extends Model
{
    use SoftDeletes;
    protected $fillable = ['imageName', 'vehicles_id', 'imageNumber'];
    protected $dates = ['deleted_at'];

}
