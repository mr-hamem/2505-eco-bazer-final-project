<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class ProductStoreReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'title' => "required|min:2",
            'stock' => 'required|numeric|min:0',
            'category_id' => 'required|numeric',
            'price' => 'required|numeric|min:0',
            'selling_price' => 'nullable|numeric|min:0',

        ];
    }

    #[Override]
    function messages()
    {
        return [
            
        ];
    }
}
