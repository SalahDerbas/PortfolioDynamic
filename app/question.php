<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable=['question','answer'];
    protected $table = 'questions';
    public $timestamps = true;
}
