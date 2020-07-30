<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public $table = 'skills';

    protected $fillable = ['name', 'percent', 'created_at', 'updated_at'];
}
