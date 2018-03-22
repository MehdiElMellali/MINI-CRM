<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
    	'first_name',
    	'last_name',
    	'email',
    	'phone_number',
		'company_id'
    ];
    public function company()
    {
    	return $this->belongsTo(Company::class,'company_id');
    }
}
