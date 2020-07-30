<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientReview extends Model
{
    public $table = 'client_reviews';

    protected $fillable = [
    	'photo', 'client_name', 'client_position', 'client_says', 
    	'created_at', 'updated_at'
    ];

    public function getPhotoPathAttribute()
    {
    	return url('/img/clients/' . $this->photo);
    }
}
