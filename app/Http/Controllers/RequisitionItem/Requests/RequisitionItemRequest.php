<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 05/10/16
 * Time: 21:43
 */

namespace App\Http\Controllers\RequisitionItem\Requests;


use Illuminate\Foundation\Http\FormRequest;

class RequisitionItemRequest extends FormRequest
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
            'ingredient' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'requisition' => 'required',
            'unit' => 'required',
        ];
    }
}