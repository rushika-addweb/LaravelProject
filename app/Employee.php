<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table ="employee";

    protected $fillable = [
        'name','address','contact','image'
    ];
    public $timestamps = false;
}
