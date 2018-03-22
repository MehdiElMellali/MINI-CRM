<?php

namespace App;

use App\Employee;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
		'name',
		'email',
		'logo',
		'website'
    ];
    
    public function employee()
	{
		return $this->hasMany(Employee::class,'id','name');
	}
	public function scopeTrending($query)
	{
		return $query->orderBy('id','desc')->get();
	}
}
