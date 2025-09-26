<?php

namespace App\Http\Controllers\Api\V1\MainCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategoryRequest\StoreMainCategoryRequest;
use App\Http\Requests\MainCategoryRequest\UpdateMainCategoryRequest;
use App\Models\MainCategory;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
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
    public function store(StoreMainCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MainCategory $mainCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMainCategoryRequest $request, MainCategory $mainCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainCategory $mainCategory)
    {
        //
    }
}
