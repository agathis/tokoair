<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 21:06
 */

namespace App\Http\Controllers\VoyagePlanning\Requests;


use Illuminate\Foundation\Http\FormRequest;

class VoyagePlanningRequest extends FormRequest
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
            'departure' => 'required|date',
            'arrival' => 'required|date',
            'safety_factor' => 'required|numeric',
            'crew_qty' => 'required|numeric',
            'route_id' => 'required',
            'cruise_id' => 'required',
        ];
    }
}