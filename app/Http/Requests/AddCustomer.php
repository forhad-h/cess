<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCustomer extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'bail|required|min:3',
            'email' => 'required|email|unique:customers,customer_email',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Please Enter your name.',
        ];
    }
}
