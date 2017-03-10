<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title'];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function permissions()
    {
        return $this->hasMany('App\Permission');
    }
}
