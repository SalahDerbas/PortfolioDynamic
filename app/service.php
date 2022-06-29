<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $fillable=['name_service','title_service'];
    protected $table = 'services';
    public $timestamps = true;
}
