<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function relSubMenu(){
        return $this->hasMany('App\SubMenu','menu_id','id');
    }
}
