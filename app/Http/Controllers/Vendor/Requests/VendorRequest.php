<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 23/09/16
 * Time: 6:29
 */

namespace App\Http\Controllers\Vendor\Requests;


use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
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
            //
            'name' => 'required',
            'payment_method' => 'required',
            'bank_account' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip_code' => 'required|numeric',
            'phone' => 'required|numeric',
            'contact_name' => 'required'
        ];
    }
}