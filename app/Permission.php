<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function scopeRelations($query, $role_id)
    {
        return $query->where('role_id', $role_id)->get();
    }
}
