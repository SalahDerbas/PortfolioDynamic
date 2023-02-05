<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactessage extends Model
{
    use HasFactory;
    protected $fillable=['name','email','subject','message'];
    protected $table = 'contactessages';
    public $timestamps = true;
}
