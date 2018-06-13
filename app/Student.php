<?php

namespace App;
//commands used to create model include: 
//php artisan make:model Student -m
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function Fees()
	{
		$timestamps = false;
		return $this->hasMany('App/Fees');
	} 
}
