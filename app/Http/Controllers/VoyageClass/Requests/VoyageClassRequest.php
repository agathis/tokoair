<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 20:10
 */

namespace App\Http\Controllers\VoyageClass\Requests;


use Illuminate\Foundation\Http\FormRequest;

class VoyageClassRequest extends FormRequest
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
            'class' => 'required',
            'description' => 'required',
        ];
    }
}