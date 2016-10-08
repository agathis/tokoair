<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 12:35
 */

namespace App\Http\Controllers\Ingredient\Actions;


use App\Http\Models\Ingredient;

trait Delete
{

    /**
     * delete ingredient data by ID
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id){

        $ingredient = Ingredient::find($id);

        $ingredient->delete();

        return redirect('ingredient')->with('success', 'Data Deleted!');

    }
}