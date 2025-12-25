<?php
namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCounter extends FormRequest
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
            'image'    => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'bg_hover' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'ar.title' => ['required', 'string'],
            'en.title' => ['required', 'string'],
            'number'   => ['required'],
            'color'    => ['required'],
        ];
    }
}
