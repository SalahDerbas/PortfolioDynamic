<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectAttachment extends Model
{
    protected $fillable=['file_name','items_id'];
    protected $table = 'project_attachments';
    public function items()
    {
        return $this->belongsTo('App\portfolioItem', 'items_id');
    }
}
