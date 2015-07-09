<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stringfield extends Model
{
    public $timestamps = false;
    protected static $unguarded = true;

    public function block()
    {
        return $this->belongsTo('App\Block', 'block_name');
    }

    public function group()
    {
        return $this->belongsTo('App\Group', 'group_id');
    }
}
