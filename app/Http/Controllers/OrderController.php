<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Request class is not strictly needed for this example if not handling form submissions yet

class OrderController extends Controller
{
    /**
     * Display customer details.
     */
    public function showCustomer($customerId, $name, $address)
    {
        return view('customerDetail', [
            'customerId' => $customerId,
            'customerName' => $name,
            'customerAddress' => $address
        ]);
    }

    /**
     * Display item details.
     */
    public function showItem($itemNo, $name, $price)
    {
        return view('itemDetail', [
            'itemNo' => $itemNo,
            'itemName' => $name,
            'itemPrice' => $price
        ]);
    }

    /**
     * Display order details.
     */
    public function showOrder($customerId, $name, $orderNo, $date)
    {
        return view('orderDetail', [
            'customerId' => $customerId,
            'customerName' => $name,
            'orderNo' => $orderNo,
            'orderDate' => $date
        ]);
    }

    /**
     * Display order transaction details.
     */
    public function showOrderDetails($transNo, $orderNo, $itemId, $name, $price, $qty)
    {
        return view('orderDetailsView', [
            'transNo' => $transNo,
            'orderNo' => $orderNo,
            'itemId' => $itemId,
            'itemName' => $name,
            'itemPrice' => $price,
            'quantity' => $qty
        ]);
    }
}