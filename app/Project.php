<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function relClient(){
        return $this->belongsTo('App\Client','client_id','id');
    }
    public function relProjectImages(){
        return $this->hasMany('App\ProjectImages','project_id','id');
    }

}
