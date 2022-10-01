<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pricing extends Model
{
    protected $fillable=['name_pricing','date' , 'price' , 'featured_1' , 'featured_2' , 'featured_3' , 'featured_4' , 'featured_5'  ];
    protected $table = 'pricings';
    public $timestamps = true;
}
