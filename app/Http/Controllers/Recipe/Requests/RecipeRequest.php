<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 21:13
 */

namespace App\Http\Controllers\Recipe\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class RecipeRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            //
            'title' => 'required',
            'picture' => ($request->hasFile('picture')) ? 'required' : '',
            'description' => 'required',
            'direction' => 'required',
            'meals_planning_id' => 'required|numeric',
            'voyage_planning_id' => 'required|numeric',
            'menu_type' => 'required'
        ];
    }
}