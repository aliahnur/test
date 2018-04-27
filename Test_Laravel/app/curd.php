<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curd extends Model
{
    protected $fillable = ['name', 'ic' , 'email', 'picture', 'mobile', 'officephone', 'occupation', 'race', 'religion', 'address1', 'address2', 'postcode', 'city', 'province', 'note', 'gender'];
}
