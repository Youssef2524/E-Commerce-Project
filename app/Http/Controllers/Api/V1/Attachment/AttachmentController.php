<?php

namespace App\Http\Controllers\Api\V1\Attachment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Attachment\StoreAttachmentRequest;
use App\Models\Attachment;
use Illuminate\Http\Request;

class AttachmentController extends Controller
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
    public function store(StoreAttachmentRequest $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attachment $attachment)
    {
        //
    }
}
