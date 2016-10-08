<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 12:39
 */

namespace App\Http\Controllers\Ingredient\Actions;


use App\Http\Controllers\Ingredient\Requests\IngredientRequest;
use App\Http\Models\Ingredient;

trait Update
{
    /**
     * update ingredient data by ID
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUpdate($id){

        $ingredient = Ingredient::find($id);

        $data = [
          'ingredient' => $ingredient,
            'categories' => $this->category
        ];

        return view('ingredients.actions.update', $data);

    }

    /**
     * post ingredient data request into database
     *
     * @param IngredientRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdate(IngredientRequest $request, $id)
    {
        $ingredient_input = $request->except(['_token', 'submit', '_method']);

        $ingredient = Ingredient::find($id);

        $ingredient->name = $ingredient_input['name'];
        $ingredient->category_id = $ingredient_input['category_id'];
        $ingredient->description = $ingredient_input['description'];

        $ingredient->save();

        return redirect('ingredient')->with('success', 'Data Updated!');
    }
}