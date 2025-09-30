<?php

namespace App\Http\Controllers\Api\V1\CartItem;

use App\Http\Controllers\Controller;
use App\Http\Requests\CartItemRequest\StoreCartItemRequest;
use App\Http\Requests\CartItemRequest\UpdateCartItemRequest;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartItemController extends Controller
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
    public function store(StoreCartItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CartItem $CartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartItemRequest $request, CartItem $CartItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartItem $CartItem)
    {
        //
    }
}
