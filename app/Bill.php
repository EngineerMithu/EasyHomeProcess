<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['bill_date','bill_name','bill_ren','bill_ele','bill_gas','bill_wat'
    ,'bill_char','bill_due','bill_tot'];

}

