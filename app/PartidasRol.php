<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PartidasRol extends Model
{
    //
    protected $guarded = [];

    public function author()
    {
    	return $this->belongsTo('App\User','author_id');
    }
}
