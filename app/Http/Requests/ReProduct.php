<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return [
            'name' => ['required', 'min:10', 'max:255', 'unique:prodct,name'],
            'from_price' =>['required', 'integer','min:4'],
            'to_price' =>['required', 'integer', 'min:4'],
            'hidden' => ['required'],
            'img__new' => ['required', 'mimes:jpeg,png'],
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
