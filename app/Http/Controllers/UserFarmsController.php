<?php

namespace App\Http\Controllers;

use App\Models\farm;
use App\Models\UserFarms;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UserFarmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $userfarms =  UserFarms::with(['user','farm'])->get();
        return view('Dashboard.UserFarms', ["userfarms" => $userfarms]);
    }



    /**
     * Display the specified resource.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        // finding user id by name that we got
        $userId =  User::where("name",$query)->get("id")->first(); 
        $farmId = farm::where("name",$query)->get("id")->first();

        if(isset($userId)&& $userId !== null && $farmId === null){

            $userfarms = UserFarms::query()
            ->where("user_id",'like',$userId->id)
            ->get();

        }else if(isset($farmId)&& $farmId !== null && $userId === null){

            $userfarms = UserFarms::query()
            ->where("farm_id",'like',$farmId->id)
            ->get();

        }else{

            $userfarms =  UserFarms::with(['user','farm'])->get();
            
        }
        return view('Dashboard.UserFarms', ["userfarms" => $userfarms]);
        
    }

 
}
