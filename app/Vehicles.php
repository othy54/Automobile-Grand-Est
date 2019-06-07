<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    protected $fillable = ['brand', 'model', 'version','door','power','fuel', 'distance', 'price','date','boite','place','description'];
}
