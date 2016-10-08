<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 21:52
 */

namespace App\Http\Controllers\MealPlanning\Requests;


use Illuminate\Foundation\Http\FormRequest;

class MealPlanningRequest extends FormRequest
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
            'meal_for' => 'required',
            'voyage_class_id' => 'required',
            'dry_menu' => 'required',
            'menu_id' => 'required',
            'voyage_planning_id' => 'required',
            'meal_time' => 'required',
            'number_days' => 'required|numeric',
        ];
    }
}