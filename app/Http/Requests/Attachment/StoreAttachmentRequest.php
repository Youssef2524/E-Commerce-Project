<?php

namespace App\Http\Requests\Attachment;

use App\Models\Attachment;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StoreAttachmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "file" => [
                "required",
                File::default()
                    ->max(100000)
                    ->rules([
                        "mimetypes:text/plain,image/png,application/pdf,text/plain",
                        "extensions:jpg,png,pdf,txt"
                    ])
            ]
        ];
    }

    public function messages()
    {
        return [
            'file.mimetypes' => 'Only JPEG, PNG, PDF, and TXT files are allowed.',
            'file.max' => 'File must not exceed 100MB.',
            'file.extensions' => 'Invalid file extension.',
        ];
    }
}
