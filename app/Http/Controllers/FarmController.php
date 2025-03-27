<?php

namespace App\Http\Controllers;

use App\Http\Requests\Farm\StoreFarmRequest;
use App\Http\Requests\Farm\UpdateFarmRequest;
use App\Models\farm;
use Illuminate\Http\Request;

class FarmController extends Controller
{   

   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allfarms = farm::all();

        return view("dashboard.Farms", ["allfarms"=> $allfarms]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Create.farms");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFarmRequest $request,farm $farm)
    {
        $farm->AddNewFarm($request);
        return redirect()->route('create.farm')->with('success', 'با موفقیت ذخیره شد!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   

        $farms = farm::where('id', $id)->first(); // Gets the first matching record
        return view("Update.farm",["farms" => $farms]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFarmRequest $request,farm $farm)
    {   
        $farm->UpdateFarm($request->validated(),$request->id);
        return redirect()->route("farms")->with("success","با موفقیت یه روزرسانی شد!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        farm::where("id", $id)->delete();

        return back();

    }
}
