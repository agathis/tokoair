<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 22:01
 */

namespace App\Http\Controllers\MealPlanning\Actions;


use App\Http\Models\MealPlanning;

trait Delete
{
    /**
     * delete meal planning by ID
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id)
    {
        $meal_planning = MealPlanning::find($id);

        $meal_planning->delete();

        return redirect('meal-planning')->with('success' , 'Data Deleted!');
    }
}