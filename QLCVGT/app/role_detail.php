<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role_detail extends Model
{
    //
    protected $table = "role_detail";


    public function role()
    {
    	return $this->belongsTo('App\role','id_role','id');
    }
}
