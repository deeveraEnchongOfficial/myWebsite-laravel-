<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {

        $imagePath = ($this->image)? $this->image : 'profile/IKD72rkkYb4t84i0zLZwlH5lny2zEkT8zp2vf0qg.png';

        return '/storage/' .$imagePath;

    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
