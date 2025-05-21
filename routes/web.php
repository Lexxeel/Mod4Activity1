<?php

use Illuminate\Support\Facades\Route;

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

// Route for customer with required parameters [cite: 80]
Route::get('/customer/{customerId}/{name}/{address}', function ($customerId, $name, $address) {
    return view('customerDetail', [
        'customerId' => $customerId,
        'customerName' => $name,
        'customerAddress' => $address
    ]);
})->name('customer.show');

// Route for item with required parameters [cite: 81]
Route::get('/item/{itemNo}/{name}/{price}', function ($itemNo, $name, $price) {
    return view('itemDetail', [
        'itemNo' => $itemNo,
        'itemName' => $name,
        'itemPrice' => $price
    ]);
})->name('item.show');

// Route for order with required parameters [cite: 82]
Route::get('/order/{customerId}/{name}/{orderNo}/{date}', function ($customerId, $name, $orderNo, $date) {
    return view('orderDetail', [
        'customerId' => $customerId,
        'customerName' => $name,
        'orderNo' => $orderNo,
        'orderDate' => $date
    ]);
})->name('order.show');

// Route for orderDetails with required parameters [cite: 83]
Route::get('/orderDetails/{transNo}/{orderNo}/{itemId}/{name}/{price}/{qty}', function ($transNo, $orderNo, $itemId, $name, $price, $qty) {
    return view('orderDetailsView', [
        'transNo' => $transNo,
        'orderNo' => $orderNo,
        'itemId' => $itemId,
        'itemName' => $name,
        'itemPrice' => $price,
        'quantity' => $qty
    ]);
})->name('order.details.show');