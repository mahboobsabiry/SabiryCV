<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public $table = 'education';

    protected $fillable = [
    	'start_date',
    	'end_date',
    	'name',
    	'field',
    	'place',
    	'created_at',
    	'updated_at'
    ];
}
