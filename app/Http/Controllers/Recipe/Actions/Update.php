<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 23/09/16
 * Time: 4:16
 */

namespace App\Http\Controllers\Recipe\Actions;


use App\Http\Controllers\Recipe\Requests\RecipeRequest;
use App\Http\Models\Recipe;

trait Update
{
    /**
     * update recipe data by ID
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUpdate($id){

        $recipe = Recipe::find($id);

        $data = [
            'recipe' => $recipe,
        ];

        return view('recipes.actions.update', $data);

    }

    public function postUpdate(RecipeRequest $request, $id){

        $recipe_input = $request->except(['_token', 'submit']);

        $path = $recipe_input['previous_picture'];

        if ($request->hasFile('picture'))
        {
            $request->file('picture')->storeAs('recipes', $request->file('picture')->getClientOriginalName(),
                'public');

            $path = '/recipes/' . $request->file('picture')->getClientOriginalName();
        }

        $recipe = Recipe::find($id);

        $recipe->title = $recipe_input['title'];
        $recipe->picture = $path;
        $recipe->description = $recipe_input['description'];
        $recipe->direction = $recipe_input['direction'];
        $recipe->meals_planning_id = $recipe_input['meals_planning_id'];
        $recipe->voyage_planning_id = $recipe_input['voyage_planning_id'];
        $recipe->menu_type = $recipe_input['menu_type'];

        $recipe->save();

        return redirect('recipe')->with('success', 'Data Updated!');

    }
}