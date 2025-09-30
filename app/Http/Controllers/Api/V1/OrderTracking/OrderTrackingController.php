<?php

namespace App\Http\Controllers\Api\V1\OrderTracking;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderTrackingRequest\StoreOrderTrackingRequest;
use App\Http\Requests\OrderTrackingRequest\UpdateOrderTrackingRequest;
use App\Models\OrderTracking;
use Illuminate\Http\Request;

class OrderTrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderTrackingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderTracking $orderTracking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderTrackingRequest $request, OrderTracking $orderTracking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderTracking $orderTracking)
    {
        //
    }
}
