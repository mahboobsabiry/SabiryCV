<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Admin extends Authenticatable
{
    use Notifiable;

	protected $guard = 'admin';

    protected $fillable = [
        'name', 'type', 'mobile', 'email', 'password', 'image', 'status', 'created_at', 'updated_at'
    ];

    protected $hidden = ['password', 'remember_token'];

    public function getImagePathAttribute()
    {
        return Storage::disk('public')->url('backend_photos/admin_photos/' . $this->image);
    }
}
