<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function Fees()
	{
		$timestamps = false;
		return $this->hasMany('App/Fees');
	}
}
