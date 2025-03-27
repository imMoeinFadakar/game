<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::query()
        ->orderBy("id")
        ->when(isset($request->id), fn  ($query) => $query->where("id", $request->id))
        ->withCount(['giftCards','referrals','farms'])
        ->get();

      

   

        return view("dashboard.users", ['users' => $users]);
      
    }

    

    /**
     * Display the specified resource.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        
        $users = User::query()->where("name",'like','%'. $query .'%')
            ->orWhere('slug','like','%'. $query .'%')
            ->orWhere('status','like','%'. $query .'%')
            ->orWhere('wallet_amount','like','%'. $query .'%')
            ->get();
        
        return view("dashboard.users", ['users' => $users]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::where('id', $id)->first();
            if($user->status === "banned"){

                $user->status = "active";

            }else{

                $user->status = "banned";
            }

        $user->save();

        return redirect()->to("admin/dashboard/users");
    }


}
