<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reffral_user extends Model
{
    use HasFactory;

    public function user()  
    {  
        return $this->belongsTo(User::class);  
    }  

    public function effring_user()
    {
        return $this->belongsTo(User::class,"reffring_id");
    }
    public function reffred_user()
    {
       return $this->belongsTo(User::class,"reffred_id"); 
    }

}
