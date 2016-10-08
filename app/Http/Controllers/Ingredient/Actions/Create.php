<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 11:04
 */

namespace App\Http\Controllers\Ingredient\Actions;


use App\Http\Controllers\Ingredient\Requests\IngredientRequest;
use App\Http\Models\Ingredient;

trait Create
{

    /**
     * create new ingredients data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {
        $data = [
            'categories' => $this->category
        ];

        return view('ingredients.actions.create', $data);
    }

    /**
     * post ingredient data request into database
     *
     * @param IngredientRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(IngredientRequest $request){
        $ingredient_input = $request->except(['_token', 'submit']);

        $ingredient = new Ingredient;

        $ingredient->name = $ingredient_input['name'];
        $ingredient->category_id = $ingredient_input['category_id'];
        $ingredient->description = $ingredient_input['description'];

        $ingredient->save();

        return redirect('ingredient')->with('success', 'Data Recorded!');
    }
}