<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [App\Http\Controllers\AuthController::class,"showLoginPage"]);
Route::post('/login', [AuthController::class, 'login'])->name('login');  
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');  
Route::get('/create', [AuthController::class,'create'])->name('');
// Route::get('admin/dashboard', [App\Http\Controllers\AuthController::class,"showDashboard"])->middleware('admin');  

Route::prefix("admin")->middleware("admin")->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\AuthController::class,"showDashboard"])->name("home");  
    Route::get("/dashboard/users", [App\Http\Controllers\UserController::class , "index"])->name("users");
    Route::get("/dashboard/users/search", [App\Http\Controllers\UserController::class , "search"])->name("user.search");
    
    Route::get('/dashboard/ban/{id}', [App\Http\Controllers\UserController::class, "edit"] );  
    Route::get("/dashboard/farms", [App\Http\Controllers\FarmController::class , "index"])->name("farms");
    Route::get("/dashboard/levels",[App\Http\Controllers\LevelController::class, "index"])->name("levels");
    
    Route::get("/dashboard/userfarms",[App\Http\Controllers\UserFarmsController::class ,"index"])->name("userfarm");
    Route::get("/dashboard/userfarms/search",[App\Http\Controllers\UserFarmsController::class ,"search"])->name("search.userfarm");

    Route::get("/dashboard/giftcart",[App\Http\Controllers\GiftCartController::class ,"index"])->name("giftcart");
    Route::get("/dashboard/transfer",[App\Http\Controllers\TransferController::class ,"index"])->name("transfer");
    Route::get("/dashboard/transfer/search",[App\Http\Controllers\TransferController::class,"search"])->name("search.transfer");

    Route::get("/dashboard/user_reffral",[App\Http\Controllers\UserReffralController::class ,"index"])->name("user_reffral");
    Route::get("/dashboard/user_reffral/search",[App\Http\Controllers\UserReffralController::class,"search"])->name("reffral.search");

    
    Route::get("/dashboard/user_reffral_managment",[App\Http\Controllers\UserReffralManagmentController::class,"index"])->name("user_reffral_managment");
    Route::get("/dashboard/user_reffral_managment/search",[App\Http\Controllers\UserReffralManagmentController::class,"search"])->name("reffral_managment.search");


    Route::get("dashboard/admin",[App\Http\Controllers\AdminController::class ,"index"])->middleware(['admin', 'management'])->name("admin.index");
    Route::get('/dashboard/admin/edit/{id}', [AdminController::class, 'edit'])->middleware(['admin', 'management']); 
    Route::post("/dashboard/admin/update",[App\Http\Controllers\AdminController::class ,"update"])->middleware(['admin', 'management'])->name("admin.update"); 
    Route::get("/dashboard/admin/create",[App\Http\Controllers\AdminController::class ,"create"])->middleware(['admin', 'management'])->name("admin.create"); 
    Route::post("/dashboard/admin/store",[App\Http\Controllers\AdminController::class ,"store"])->middleware(['admin', 'management'])->name("admin.store"); 
    Route::get("/dashboard/admin/destroy/{id}",[App\Http\Controllers\AdminController::class ,"destroy"])->middleware(["admin","management"]);


    Route::prefix("/dashboard/create")->group(function () {
        Route::get("farm",[App\Http\Controllers\FarmController::class,"create"])->name("create.farm");
        Route::post("storefarm",[App\Http\Controllers\FarmController::class,"store"])->name("store.farm");
        Route::get("level",[App\Http\Controllers\LevelController::class,"create"])->name("create.level");
        Route::post("store_level",[App\Http\Controllers\LevelController::class,"store"])->name("store.level");
        Route::get("gift_cart",[App\Http\Controllers\GiftCartController::class ,"create"])->name("create.giftcart");
        Route::post("store_giftcart",[App\Http\Controllers\GiftCartController::class,"store"])->name("store.giftcart");
    
    
    });

    Route::prefix("/dashboard/destroy")->group(function(){
        Route::get("farm/{id}", [App\Http\Controllers\FarmController::class,"destroy"]);
        Route::get("level/{id}",[App\Http\Controllers\LevelController::class,"destroy"]);
        Route::get("giftcart/{id}",[App\Http\Controllers\GiftCartController::class,"destroy"]);

    });

    Route::prefix("/dashboard/update")->group(function(){
        Route::get("farm/{id}", [App\Http\Controllers\FarmController::class,"edit"]);
        Route::post("update_farm", [App\Http\Controllers\FarmController::class,"update"])->name("update.post.farm");
        Route::get("level/{id}",[App\Http\Controllers\LevelController::class,"edit"])->name("update.level");
        Route::post("update_level",[App\Http\Controllers\LevelController::class,"update"])->name("update.post.level");
       
    });

});

Route::fallback(function(){
    return view("Notfound");
});
