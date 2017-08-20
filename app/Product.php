<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Product extends Model 

{
protected $fillable = ['name', 'price', 'description'];

}