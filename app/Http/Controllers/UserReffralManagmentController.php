<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserReffralManagment;

class UserReffralManagmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allUsersReffralmanagmentRow = UserReffralManagment::with("user")->get();
        return view("Dashboard.reffralUserManagment", data: ["allUsersReffralmanagmentRow" => $allUsersReffralmanagmentRow]);
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

            $allUsersReffralmanagmentRow = UserReffralManagment::query()
            ->where("user_id",'like',$userId->id)
            ->get();

        }else{
            $allUsersReffralmanagmentRow = UserReffralManagment::with("user")->get();
        }
    

        return view("Dashboard.reffralUserManagment", data: ["allUsersReffralmanagmentRow" => $allUsersReffralmanagmentRow]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
