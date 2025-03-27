<?php

namespace App\Http\Controllers;

use App\Models\Reffral_user;
use App\Models\User;
use Illuminate\Http\Request;

class UserReffralController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allreffrals = Reffral_user::all();
        return view("Dashboard.reffralUsers", data: ["allreffrals" => $allreffrals]);
    }

    /**
     * Display the specified resource.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        // finding user id by name that we got
        $userId =  User::where("name",$query)->get("id")->first(); 
        
        if(isset($userId)){
            $allreffrals = Reffral_user::query()
            ->where("reffring_id",'like',$userId->id)
            ->orWhere("reffred_id",'like',$userId->id)
            ->get();
        }else{
            $allreffrals = Reffral_user::all();
        }
       

        return view("Dashboard.reffralUsers", data: ["allreffrals" => $allreffrals]);

    }


}
