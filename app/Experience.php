<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public $table = 'experiences';

    protected $fillable = [
    	'start_date',
    	'end_date',
    	'name',
    	'company',
    	'created_at',
    	'updated_at'
    ];
}
