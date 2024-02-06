<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            //
            'product_name' => 'required|string|max:255',
            'price'=> 'required|numeric',
            'description' => 'required|max:255',
            't_image' => request()->method == 'POST' ? 'required|mimes:jpeg,jpg,png,gif' : 'nullable',
            'productBrand' => 'required',

        ];
    }

    public function messages(){
        return[
            'product_name.required' => 'Enter Product Name',
            'price.required' => 'Enter Price for product',
            'description.required' => 'Enter short detail of Product',
            't_image.required' => 'upload Image for thumbnail',
            'productBrand.required' => 'Select General Brand Or any other Brand.'

        ];
    }
}
