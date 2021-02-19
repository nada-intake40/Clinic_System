<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable =['name','address','clinic','phone_no'];

    function phones()
    {
        return $this->hasMany('App\Models\Phone');
    }

}