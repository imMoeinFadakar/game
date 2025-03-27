<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class giftcart_user extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function giftcart()
    {
        return $this->belongsTo(giftcart::class);
    }

}
