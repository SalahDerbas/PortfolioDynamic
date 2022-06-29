<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable=['name_client','position_client' , 'title_client' , 'image' , 'name_image'];
    protected $table = 'clients';
    public $timestamps = true;
}
