<?php

namespace App\Http\Controllers\Api\V1\MainCategorySubCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainCategorySubcategoryRequest\StoreMainCategorySubcategoryRequest;
use App\Http\Requests\MainCategorySubcategoryRequest\UpdateMainCategorySubcategoryRequest;
use App\Models\MainCategorySubCategory;
use Illuminate\Http\Request;

class MainCategorySubCategoryController extends Controller
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
    public function store(StoreMainCategorySubcategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MainCategorySubCategory $mainCategorySubCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMainCategorySubcategoryRequest $request, MainCategorySubCategory $mainCategorySubCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainCategorySubCategory $mainCategorySubCategory)
    {
        //
    }
}
