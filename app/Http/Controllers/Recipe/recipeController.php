<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 20:51
 */

namespace App\Http\Controllers\Recipe;


use App\Http\Controllers\Controller;
use App\Http\Models\Recipe;

class recipeController extends Controller
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection|static[]
     */
    private $recipe;

    use Actions\Create, Actions\Delete, Actions\Update;

    /**
     * recipeController constructor.
     */
    public function __construct()
    {
        $this->recipe = Recipe::all();
    }

    /**
     * show recipe data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $data = [
            'recipes' => $this->recipe
        ];

        return view('recipes.index', $data);
    }
}