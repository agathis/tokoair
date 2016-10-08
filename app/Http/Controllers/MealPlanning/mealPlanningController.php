<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 21:33
 */

namespace App\Http\Controllers\MealPlanning;


use App\Http\Controllers\Controller;
use App\Http\Models\MealPlanning;
use App\Http\Models\Menu;
use App\Http\Models\VoyageClass;
use App\Http\Models\VoyagePlanning;

class mealPlanningController extends Controller
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection|static[]
     */
    private $menu, $voyage_planning, $voyage_class, $meal_planning;

    use Actions\Create, Actions\Delete, Actions\Update;

    /**
     * mealPlanningController constructor.
     */
    public function __construct()
    {
        $this->menu = Menu::all();
        $this->voyage_planning = VoyagePlanning::all();
        $this->voyage_class = VoyageClass::all();
        $this->meal_planning = MealPlanning::all();
    }

    /**
     * show meal planning data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $data = [
            'menus' => $this->menu,
            'voyage_plannings' => $this->voyage_planning,
            'voyage_classes' => $this->voyage_class,
            'meal_plannings' => $this->meal_planning

        ];

        return view('meal-plannings.index', $data);
    }
}