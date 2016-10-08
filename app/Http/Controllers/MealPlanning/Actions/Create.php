<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 21:46
 */

namespace App\Http\Controllers\MealPlanning\Actions;


use App\Http\Controllers\MealPlanning\Requests\MealPlanningRequest;
use App\Http\Models\MealPlanning;

trait Create
{
    /**
     * create new meal planning data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {
        $data = [
            'menus' => $this->menu,
            'voyage_classes' => $this->voyage_class,
            'voyage_plannings' => $this->voyage_planning
        ];

        return view('meal-plannings.actions.create', $data);
    }

    /**
     * post meal planning data request into database
     *
     * @param MealPlanningRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(MealPlanningRequest $request)
    {

        $meal_planning_input = $request->except(['_token', 'submit']);

        $meal_planning = new MealPlanning;

        $meal_planning->meal_for = $meal_planning_input['meal_for'];
        $meal_planning->voyage_class_id = $meal_planning_input['voyage_class_id'];
        $meal_planning->dry_menu = $meal_planning_input['dry_menu'];
        $meal_planning->menu_id = $meal_planning_input['menu_id'];
        $meal_planning->voyage_planning_id = $meal_planning_input['voyage_planning_id'];
        $meal_planning->meal_time = $meal_planning_input['meal_time'];
        $meal_planning->number_days = $meal_planning_input['number_days'];

        $meal_planning->save();

        return redirect('meal-planning')->with('success' , 'Data Recorded!');
    }
}