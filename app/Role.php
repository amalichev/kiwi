<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title'];
}
