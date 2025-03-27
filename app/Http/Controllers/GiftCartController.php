<?php

namespace App\Http\Controllers;

use App\Http\Requests\Giftcart\StoreGiftCartRequest;
use App\Models\giftcart;
use Illuminate\Http\Request;

class GiftCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allGiftCarts = giftcart::all();
        return view("Dashboard.GiftCart", ["allGiftCarts" => $allGiftCarts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Create.giftcart");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGiftCartRequest $request,giftcart $giftcart)
    {
        $giftcart->AddGiftCart($request->validated(),$request->rowCount);
        return redirect()->route("giftcart")->with("success","کیفت کارت با موفقیت دخیره شد");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
       giftcart::destroy($id);
       return back();
    }
}
