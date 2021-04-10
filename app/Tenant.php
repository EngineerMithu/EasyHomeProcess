<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable =['tenant_image','tenant_enroll','tenant_name','tenant_phone',
    'tenant_address1','tenant_address','tenant_nid','tenant_occu','tenant_family'];
}
