<?php

namespace App\Models;

use App\Role;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'slug', 'name'
    ];

    public function roles() {

        return $this->belongsToMany(Role::class,'roles_permissions');

    }

    public function users() {

        return $this->belongsToMany(User::class,'users_permissions');

    }
    //
}
