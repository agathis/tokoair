<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 23/09/16
 * Time: 5:41
 */

namespace App\Http\Controllers\Menu;


use App\Http\Controllers\Controller;
use App\Http\Models\Menu;
use App\Http\Models\Recipe;

class menuController extends Controller
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection|static[]
     */
    private $menu, $recipe;

    use Actions\Create, Actions\Delete, Actions\Update;

    /**
     * menuController constructor.
     */
    public function __construct()
    {
        $this->menu = Menu::all();
        $this->recipe = Recipe::all();
    }

    /**
     * show menu data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $data = [
            'menus' => $this->menu,
            'recipes' => $this->recipe
        ];

        return view('menus.index', $data);
    }
}