<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
    public function Student()
	{
		$timestamps = false;
		return $this->belongsToMany('App/Student');
	}
}
