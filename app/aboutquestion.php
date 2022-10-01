<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aboutquestion extends Model
{
    protected $fillable=['question','answer'];
    protected $table = 'aboutquestions';
    public $timestamps = true;
}
