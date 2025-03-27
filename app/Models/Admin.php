<?php

namespace App\Models;

use Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        "name" ,
            "email" ,
            "password" ,
            "age",
            "address",  
            "type" ,

    ] ;


        public function UpdateAdmin($request)
        {   

            $admin = $this->find($request['id'])->first();
            $admin->name = $request["name"];
            $admin->age = $request["age"];
            $admin->email = $request["email"];
            $admin->Address = $request["Address"];
            $admin->password = isset($request["password"]) ? Hash::make($request["password"]) : $admin->password;
            $admin->type = "admin";
            $admin->update();
            return;
        }

        public function AddNewAdmin($request)
        {
            $this->name = $request["name"];
            $this->age = $request["age"];
            $this->email = $request["email"];
            $this->Address = $request["Address"];
            $this->password = Hash::make($request["password"]); 
            $this->type = "admin";
             $this->save();
             return;
        }


}
