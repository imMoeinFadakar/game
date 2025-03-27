<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transfer extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the transfer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sender()  
    {  
        return $this->belongsTo(User::class, 'from_user'); // Establishing relationship for the sender  
    }  

    public function receiver()  
    {  
        return $this->belongsTo(User::class, 'to_user'); // Establishing relationship for the receiver  
    } 

}
