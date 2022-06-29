<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    protected $fillable=['position_experience','from_experience' , 'to_experience' , 'company_name' , 'title_experience'];
    protected $table = 'experiences';
    public $timestamps = true;
}
