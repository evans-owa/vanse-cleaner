<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Quick;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\CustomerUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\staff\staffcontroller;
use App\Http\controllers\ServiceController;
use App\Http\controllers\Admin\CategoryController;
use App\Http\controllers\Admin\Service1Controller;
use App\Http\controllers\customercontroller;
use App\Http\controllers\Frontservice\displayserviceController;
use App\Http\controllers\Frontservice\CartController;
use App\Http\controllers\Frontservice\CheckOutController;
use App\Http\controllers\Frontservice\UserController;
use App\Http\controllers\Admin\ordercontroller;


/*myServices.categories.index
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/pricing', function () {
    return view('pricing');
});

//Route::get('/contacts', function () {
    //return view('contacts');
//});
Route::get('/project', function () {
    return view('project');
});


Route::get('/campaign', function () {
    return view('campaign');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/otherservices', function () {
    return view('otherservices');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/pricing', function()
{
    return view('pricing');
});

Route::get('/services',[displayserviceController::class,'showservice']);
Route::get('/contacts', [displayserviceController::class,'showsoncontacts']);
Route::get('/category',[displayserviceController::class,'categoryshow']);
Route::get('view-category/{name}',[displayserviceController::class, 'viewcategory']);
Route::get('category/{name}/{service_name}', [displayserviceController::class, 'productview']);

//service sections
Route::get('service/{category}/{service_name}',[displayserviceController::class,'serviceView']);

// adding to Waiting cart
Route::post('/add-to-cart', [CartController::class, 'addService']);
Route::post('delete-cart-item',[CartController::class,'deleteService']);
Route::post('update-cart',[CartController::class,'updatewait']);

Route::get('userviewprofile', function()
{
    return view('userviewprofile');
});

Route::middleware(['auth'])->group(function () {
    Route::get('waitingcart',[CartController::class,'viewwaiting']);
    Route::get('checkoutWaiting',[CheckOutController::class, 'index']);
    Route::post('place-order',[CheckOutController::class, 'placewait']);

    Route::get('my-order',[UserController::class, 'myorder']);
    Route::get('view-request/{id}', [UserController::class, 'view']);

    Route::post('proceed-to-pay', [CheckOutController::class, 'razerpaycheck']);
   // Route::post('mpesa', [CheckOutController::class, 'stk']);

});



//customer controller
Route::get('newCustomer', [CustomerUserController::class,'show']);
Route::get('/newCustomer', function () {
    return view('newCustomer');
});

Route::post('quickmessage', [Quick::class, 'quickmessage']);


//authenication controller
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::middleware(['auth', 's_admin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('addCategory', [App\Http\controllers\Admin\CategoryController::class, 'gory']);
    Route::post('categoryadd',[App\Http\controllers\Admin\CategoryController::class, 'more']);
    Route::get('edit-catgry{id}', [CategoryController::class, 'editcategory']);
    Route::put('categoryupdate{id}', [CategoryController::class,'update']);
    Route::get('deletecategory{id}', [CategoryController::class,'destroy']);

    Route::get('service1', [Service1Controller::class,'index']);
    Route::get('add-service1',  [Service1Controller::class,'add']); //is for last file on the side bar
    Route::post('insert-services', [Service1Controller::class, 'insert']);
    Route::get('edit-service{id}',[Service1Controller::class,'edit']);
    Route::get('deleteservice{id}', [Service1Controller::class, 'remove']);
    Route::put('update-services{id}', [Service1Controller::class, 'Update']);


//staff controllers
    Route::get('staff', [staffcontroller::class,'staff']);
    Route::get('Veiwstaff',[staffcontroller::class, 'staff']);
    Route::get('addstaff',[staffcontroller::class, 'addstaffs']);
    Route::post('insertstaff',[staffcontroller::class, 'insert']);
    Route::get('edit{id}',[staffcontroller::class,'staffedit']);
    Route::get('deletestaff{id}',[staffcontroller::class, 'desto']);
    Route::put('staffupdate{id}', [staffcontroller::class, 'updatestaff']);


    //delete of messages quick messages
    Route::get('deletemessage{customer_id}', [Quick::class, 'delete']);

    //customerView
    Route::get('dashboard',[customercontroller::class, 'customerView']);
    Route::get('edit-view',[customercontroller::class,'edit']);//STILL NOT IN USE



    Route::get('message', [MessagesController::class,'show']);
    Route::get('message',[MessagesController::class, 'fastmessage']);
    Route::get('admin.orders', [ordercontroller::class, 'orderAdmin']);
    Route::get('delete{id}', [ordercontroller::class, 'Toa']);

    //admin all order view
    Route::get('admin/vieworder/{id}', [ordercontroller::class, 'onaOrders']);
    //Route::get('admin/vieworder/{orgid}', [ordercontroller::class, 'orgservice']);
    Route::get('admin/viewOrderservice', [ordercontroller::class, 'OnaServices']);
    Route::put('update-order/{id}', [ordercontroller::class, 'updateRequest']);
    Route::get('request-history', [ordercontroller::class, 'requestHistory']);

});
