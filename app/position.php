<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class position extends Model
{
    protected $fillable=['name_position' , 'title_skill'];
    protected $table = 'positions';
    public $timestamps = true;
}
