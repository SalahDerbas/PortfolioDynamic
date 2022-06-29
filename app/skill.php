<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    protected $fillable=['position_skill','title_skill' , 'percentage'];
    protected $table = 'skills';
    public $timestamps = true;
}
