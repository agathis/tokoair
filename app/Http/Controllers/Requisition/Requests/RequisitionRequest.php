<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 05/10/16
 * Time: 7:35
 */

namespace App\Http\Controllers\Requisition\Requests;


use Illuminate\Foundation\Http\FormRequest;

class RequisitionRequest extends FormRequest
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
            'number' => 'required|numeric',
            'voyage_planning' => 'required',
            'date' => 'required|date',
            'total_amount' => 'required|numeric',
            'vendor' => 'required',
        ];
    }
}