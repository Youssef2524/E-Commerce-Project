<?php

namespace App\Http\Controllers\Api\V1\PasswordResetToken;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordResetTokenRequest\StorePasswordResetTokenRequest;
use App\Http\Requests\PasswordResetTokenRequest\UpdatePasswordResetTokenRequest;
use App\Models\PasswordResetToken;
use Illuminate\Http\Request;

class PasswordResetTokenController extends Controller
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
    public function store(StorePasswordResetTokenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PasswordResetToken $passwordResetToken)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePasswordResetTokenRequest $request, PasswordResetToken $passwordResetToken)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PasswordResetToken $passwordResetToken)
    {
        //
    }
}
