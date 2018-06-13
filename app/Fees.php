<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//commands used to create model include: 
//php artisan make:model Fees -m
class Fees extends Model
{
    public function Student()
	{
		$timestamps = false;
		return $this->belongsToMany('App/Student');
	}
}
