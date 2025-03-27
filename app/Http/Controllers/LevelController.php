<?php

namespace App\Http\Controllers;

use App\Http\Requests\Level\StoreLevelRequest;
use App\Http\Requests\Level\UpdateLevelRequest;
use App\Models\levels;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alllevels = levels::all();
        return view("Dashboard.level", ["alllevels" => $alllevels]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("Create.level");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLevelRequest $request,levels $levels)
    {
        $levels->addNewWherehouseLevel($request->validated());
        return redirect()->route("levels")->with("success","با موفقیت وارد شد");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $level = levels::find($id)->first();
        return view("Update.level",["level" => $level]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLevelRequest $request, levels $levels)
    {
        $levels->UpdateWherehouseLevel($request->validated());
        return redirect()->route("levels")->with("success","یا موفقیت به روز شد");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        levels::find($id)->delete();
        return back();
    }
}
