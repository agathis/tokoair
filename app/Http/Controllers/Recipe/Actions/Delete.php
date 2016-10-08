<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 23/09/16
 * Time: 4:14
 */

namespace App\Http\Controllers\Recipe\Actions;


use App\Http\Models\Recipe;

trait Delete
{
    /**
     * delete recipe data by ID
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id){

        $recipe = Recipe::find($id);

        $recipe->delete();

        return redirect('recipe')->with('success', 'Data Deleted!');

    }
}