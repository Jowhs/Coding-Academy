<?php

namespace Zoo;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animal';

    protected $fillable = ['type', 'name', 'gender', 'age', 'height'];
}