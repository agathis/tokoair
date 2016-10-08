<?php

namespace App\Http\Controllers\Route\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortRequest extends FormRequest
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
            'port_origin' => 'required',
            'port_destination' => 'required',
            'eta' => 'required|numeric',
         ];
    }
}
