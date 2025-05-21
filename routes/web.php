<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController; // Import the OrderController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); // Or any default page you have
});

// Route for customer using OrderController
Route::get('/customer/{customerId}/{name}/{address}', [OrderController::class, 'showCustomer'])->name('customer.show');

// Route for item using OrderController
Route::get('/item/{itemNo}/{name}/{price}', [OrderController::class, 'showItem'])->name('item.show');

// Route for order using OrderController
Route::get('/order/{customerId}/{name}/{orderNo}/{date}', [OrderController::class, 'showOrder'])->name('order.show');

// Route for orderDetails using OrderController
Route::get('/orderDetails/{transNo}/{orderNo}/{itemId}/{name}/{price}/{qty}', [OrderController::class, 'showOrderDetails'])->name('order.details.show');