<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class farm extends Model
{
    use HasFactory;

    protected $fillables = [
        "name",
        "image",
        "product_name",
        "min_reward",
        "max_reward",
        "slug",
        "product_reward",
        "reffral_require",
        "token_require"
    ];

    public function user()
    {
        return $this->belongsToMany(User::class,'user_farms');
    }


    public function AddNewFarm($request)
    {
        $this->name = $request->name;
        if ($request->hasFile('image')) {  
            $image = $request->file('image');  
            $path = $image->store('images', 'public'); // Store in the public/images directory  
            $this->image =  $path;
        }
        $this->product_name = $request->product_name;
        $this->min_reward = $request->min_reward;
        $this->max_reward = $request->max_reward;
        $this->slug = $request->slug;
        $this->product_reward = $request->product_reward;
        $this->reffral_require = $request->reffral_require;
        $this->token_require = $request->token_require;
        $this->save();

        return;
    }


    public function UpdateFarm($request,$id)
    {   

        $farm = $this->find($id)->first();
        $farm->name = $request['name'];
        if (isset($request["image"]) && $request["image"] !== null) {  
            $image = $request["image"];  
            $path = $image->store('images', 'public'); // Store in the public/images directory  
            $farm->image = $path;
        }
        $farm->product_name = $request['product_name'];
        $farm->min_reward = $request['min_reward'];
        $farm->max_reward = $request['max_reward'];
        $farm->slug = $request['slug'];
        $farm->product_reward = $request['product_reward'];
        $farm->reffral_require = $request['reffral_require'];
        $farm->token_require = $request["token_require"];
        $farm->update();

        return;
    }




}
