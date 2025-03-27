<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class giftcart extends Model
{
    use HasFactory;
  
    public function users()  
    {  
        return $this->belongsToMany(User::class,'giftcart_users','giftcart_id','user_id');  
    }  

    public function AddGiftCart(array $request, $rowCount )
    {
        $uniqueTokens = [];  
         

        while (count($uniqueTokens) < $rowCount) {  
            $token = Str::random(10); // Adjust length as needed  
            if (!in_array($token, $uniqueTokens)) {  
                $uniqueTokens[] = $token;  
            }  
        } 
       
        
        for ($i=0; $i < $rowCount; $i++) { 

            $this->insert([
                "name" => $request["name"],
                "value" => $request["value"],
                "code" => $uniqueTokens[$i]
            ]);

        }

            
    
        return;



    }



}   
