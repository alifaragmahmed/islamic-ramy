<?php
namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreVideo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'video_category_id' => ['required', 'exists:video_categories,id'],
            'time_per_minutes' => ['required', 'string'],
            'master_image' => [
                'nullable',
                'image',
                'mimes:png,jpg,jpeg',
                'max:2048',
                Rule::requiredIf(function () {
                    return !isset($this->id);
                })
            ],
            'embeded_text' => ['nullable', 'string'],
            'file' => ['nullable', 'file', 'mimes:mp4,avi,mov,wmv'],
            'ar.title' => ['required', 'string'],
            'ar.description' => ['required', 'string'],
            'ar.short_description' => ['required', 'string'],
            'en.title' => ['required', 'string'],
            'en.description' => ['required', 'string'],
            'en.short_description' => ['required', 'string'],
        ];
    }
}
