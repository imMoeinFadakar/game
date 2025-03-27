<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class levels extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function addNewWherehouseLevel($request)
    {
        $this->level_number = $request["level_number"];
        $this->cost = $request['cost'];
        $this->max_amount = $request['max_amount'];
        $this->save();
        return;
    }


    public function UpdateWherehouseLevel($request)
    {
       $specificLevel =  $this->find( $request['id'] )->first();
       $specificLevel->level_number = $request['level_number'];
       $specificLevel->cost = $request['cost'];
       $specificLevel->max_amount = $request['max_amount'];
        $specificLevel->update();
        return;
    }

}
