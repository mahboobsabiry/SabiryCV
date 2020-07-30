<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyInfo extends Model
{
    public $table = 'my_infos';

    protected $fillable = [
    	'key', 
    	'value',
    	'created_at', 
    	'updated_at'
    ];
}
