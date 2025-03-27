<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    /**
     * Get all of the transfer for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transfers()  
    {  
        return $this->hasMany(Transfer::class, 'from_user'); // Specify 'from_user' as the foreign key  
    }  
   
    /**
     * The giftcart that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function giftCards()  
    {  
        return $this->belongsToMany(giftcart::class, 'giftcart_users', 'user_id', 'giftcart_id');  
    }  
    
    /**
     * Get all of the user_reffral for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
   public function referrals()
   {
        return $this->hasMany(Reffral_user::class,'reffring_id');
   }

    /**
     * Get all of the farms for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function farms()
    {
        return $this->belongsToMany(farm::class,'user_farms');
    }

   
    
}
