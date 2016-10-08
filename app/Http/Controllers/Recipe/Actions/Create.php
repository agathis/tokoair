<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 21:01
 */

namespace App\Http\Controllers\Recipe\Actions;


use App\Http\Controllers\Recipe\Requests\RecipeRequest;
use App\Http\Models\Recipe;

trait Create
{
    /**
     * show create recipe data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate(){

        return view('recipes.actions.create');
    }

    public function postCreate(RecipeRequest $request){

        $recipe_input = $request->except(['_token', 'submit']);

        $path = '';

        if ($request->hasFile('picture'))
        {
            $request->file('picture')->storeAs('recipes', $request->file('picture')->getClientOriginalName(),
                'public');

            $path = '/recipes/' . $request->file('picture')->getClientOriginalName();
        }

        $recipe = new Recipe;

        $recipe->title = $recipe_input['title'];
        $recipe->picture = $path;
        $recipe->description = $recipe_input['description'];
        $recipe->direction = $recipe_input['direction'];
        $recipe->meals_planning_id = $recipe_input['meals_planning_id'];
        $recipe->voyage_planning_id = $recipe_input['voyage_planning_id'];
        $recipe->menu_type = $recipe_input['menu_type'];

        $recipe->save();

        return redirect('recipe')->with('success', 'Data Recorded!');

    }
}