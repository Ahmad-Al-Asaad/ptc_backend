<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemCost extends Model
{
    protected $guarded = [];


    public function itemsCost()
    {
        return $this->hasMany('App\Models\ExpansiveCost');
    }
}
