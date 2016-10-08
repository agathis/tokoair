<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 22:03
 */

namespace App\Http\Controllers\MealPlanning\Actions;


use App\Http\Controllers\MealPlanning\Requests\MealPlanningRequest;
use App\Http\Models\MealPlanning;

trait Update
{
    /**
     * update a meal planning data by ID
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUpdate($id)
    {
        $meal_planning = MealPlanning::find($id);

        $data = [
            'meal_planning' => $meal_planning,
            'menus' => $this->menu,
            'voyage_classes' => $this->voyage_class,
            'voyage_plannings' => $this->voyage_planning
        ];

        return view('meal-plannings.actions.update', $data);
    }

    /**
     * post meal planning data request into database
     *
     * @param MealPlanningRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdate(MealPlanningRequest $request, $id)
    {
        $meal_planning_input = $request->except(['_token', 'submit', '_method']);

        $meal_planning = MealPlanning::find($id);

        $meal_planning->meal_for = $meal_planning_input['meal_for'];
        $meal_planning->voyage_class_id = $meal_planning_input['voyage_class_id'];
        $meal_planning->dry_menu = $meal_planning_input['dry_menu'];
        $meal_planning->menu_id = $meal_planning_input['menu_id'];
        $meal_planning->voyage_planning_id = $meal_planning_input['voyage_planning_id'];
        $meal_planning->meal_time = $meal_planning_input['meal_time'];
        $meal_planning->number_days = $meal_planning_input['number_days'];

        $meal_planning->save();

        return redirect('meal-planning')->with('success' , 'Data Updated!');
    }
}