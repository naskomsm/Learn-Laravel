<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : "profile/cr5GiRbkUaHg2fzzB9VqRjUxFJlyTQ3r7Rys2EVr.png";
        return "/storage/" . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
