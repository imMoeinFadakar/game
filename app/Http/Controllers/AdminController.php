<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\StoreAdminRequest;
use App\Http\Requests\Admin\UpdateAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allAdmins = Admin::all();
        return view("Dashboard.admin", ["allAdmins"=> $allAdmins]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Create.admin");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request,Admin $admin)
    {
        $admin->AddNewAdmin($request->validated());
        return      redirect()->route("admin.create")->with("success","ادمین با موفقیت افزوده شد");
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
        $admin = Admin::find($id)->first();

        return view("Update.admin",["admin" => $admin]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        $admin->UpdateAdmin($request->validated());
       return redirect()->route("admin.index")->with("success","با موفقیت انجام شد");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Admin::find($id)->first()->delete();
        return redirect()->route("admin.index")->with("success","با موفقیت حدف شد");

    }
}
