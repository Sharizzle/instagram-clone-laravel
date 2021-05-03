<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/default.png';

        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
