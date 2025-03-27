<?php

namespace App\Http\Controllers;

use App\Models\transfer;
use App\Models\User;
use Illuminate\Http\Request;

class TransferController extends Controller
{   
    /**
     * Get the user that owns the TransferController
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function index()
    {   

        $transfers = Transfer::with(['sender', 'receiver'])->get();  

        return view("Dashboard.transfer",["transfers" => $transfers]);
    }

    public function search(Request $request)
    {
           $query = $request->input('query');

        
            $userId = User::query()->where("name",$query)->first();
            
            // dd($userId->id);
            if(isset($userId) && $userId !== null){

                $transfers = transfer::where("from_user","like",$userId->id)
                ->orWhere("to_user","like",$userId->id)
                ->get();

            }else{

                $transfers = Transfer::with(['sender', 'receiver'])->get();  
            }
        


        return view("dashboard.transfer", ['transfers' => $transfers]);

    }

}
