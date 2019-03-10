<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImages extends Model
{
    public function relProject(){
        return $this->belongsTo('App\Project','project_id','id');
    }
}
