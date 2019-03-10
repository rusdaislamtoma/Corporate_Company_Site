<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    public function relMenu(){
        return $this->belongsTo('App\Menu','menu_id','id');
    }
}
