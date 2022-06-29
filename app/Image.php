<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $fillable= ['filename','imageable_id','imageable_type'];
    protected $table = 'images';
    public $timestamps = true;

    public function imageable()
    {
        return $this->morphTo();
    }
}
