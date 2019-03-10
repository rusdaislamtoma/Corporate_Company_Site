<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function relProject(){
        return $this->hasMany('App\Project','client_id','id');
    }
}
