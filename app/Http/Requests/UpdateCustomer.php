<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use DB;
class UpdateCustomer extends FormRequest
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
            'email' => 'required|email',
        ];
    }
    
    public function messages()
    {
        return [
        ];
    }
    public function isChange()
    {
        $customer = DB::table('customers')
                ->where('customer_id', $this->id)
                ->first();
        if (
            $customer->customer_name == $this->name &&
            $customer->customer_email == $this->email &&
            $customer->customer_phone == $this->phone &&
            $customer->customer_address == $this->address
        ) {
            return FALSE;
        }else {
            return TRUE;
        }
    }
}
