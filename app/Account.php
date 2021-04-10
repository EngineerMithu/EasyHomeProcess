<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['account_date','account_balance','account_cost','account_salary','account_electricity'
    ,'account_water','account_gas','account_service','account_tax','account_other'];
}
