<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolioCategory extends Model
{
    protected $fillable=['name_category','title_category'];
    protected $table = 'portfolio_categories';
    public $timestamps = true;

    public function projects(){
        return $this->hasMany(portfolioItem::class);
    }
}
