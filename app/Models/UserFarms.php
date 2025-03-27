<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFarms extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,"user_id");
    }

    public function farm()
    {
        return $this->belongsTo(farm::class,"farm_id");
    }

}
