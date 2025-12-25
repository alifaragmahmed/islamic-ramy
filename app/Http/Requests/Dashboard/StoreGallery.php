<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreGallery extends FormRequest
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
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg', Rule::requiredIf(function () {
                return !isset($this->id);
            })],
            'link'          => ['nullable', 'string'],
            'type'          => ['nullable', 'string'],
        ];
    }
}
