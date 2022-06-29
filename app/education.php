<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    protected $fillable=['name','from_education' , 'to_education' , 'title' , 'univercity_name'];
    protected $table = 'education';
    public $timestamps = true;
}
