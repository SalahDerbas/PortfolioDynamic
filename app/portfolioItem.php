<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolioItem extends Model
{
    protected $fillable=['name_project_item','name_client' , 'url' , 'descriptions_item' , 'date_item'];
    protected $table = 'portfolio_items';
    public $timestamps = true;

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function category(){
        return $this->belongsTo(portfolioCategory::class);
    }
}
