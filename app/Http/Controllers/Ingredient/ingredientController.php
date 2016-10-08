<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 9:52
 */

namespace App\Http\Controllers\Ingredient;


use App\Http\Controllers\Controller;
use App\Http\Models\Category;
use App\Http\Models\Ingredient;

class ingredientController extends Controller
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection|static[]
     */
    private $category, $ingredient;

    use Actions\Create, Actions\Delete, Actions\Update;

    /**
     * ingredientController constructor.
     */
    public function __construct()
    {
        $this->ingredient = Ingredient::all();
        $this->category = Category::all();
    }

    /**
     * show ingredients data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $data = [
            'ingredients' => $this->ingredient,
            'categories' => $this->category
        ];

        return view('ingredients.index', $data);
    }
}