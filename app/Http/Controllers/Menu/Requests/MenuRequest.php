<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 23/09/16
 * Time: 5:59
 */

namespace App\Http\Controllers\Menu\Requests;


use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'appetizer' => 'required',
            'main_dish' => 'required',
            'dessert' => 'required',
            'beverage' => 'required',
            'type' => 'required'
        ];
    }
}