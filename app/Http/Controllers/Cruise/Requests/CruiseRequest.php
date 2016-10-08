<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 1:27
 */

namespace App\Http\Controllers\Cruise\Requests;


use Illuminate\Foundation\Http\FormRequest;

class CruiseRequest extends FormRequest
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
            'voyage_number_start' => 'required|date',
            'voyage_number_end' => 'required|date',
            'capacity' => 'required|numeric',
            'cruise_type' => 'required',
            'imo_number' => 'required',
            'total_capacity' => 'required|numeric',
        ];
    }
}