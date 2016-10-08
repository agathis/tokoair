<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 20:41
 */

namespace App\Http\Controllers\VoyagePlanning;


use App\Http\Controllers\Controller;
use App\Http\Models\Cruise;
use App\Http\Models\Route;
use App\Http\Models\VoyagePlanning;

class voyagePlanningController extends Controller
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection|static[]
     */
    private $voyage_planning, $route, $cruise;

    use Actions\Create, Actions\Delete, Actions\Update;

    /**
     * voyagePlanningController constructor.
     */
    public function __construct()
    {
        $this->voyage_planning = VoyagePlanning::all();
        $this->route = Route::all();
        $this->cruise = Cruise::all();
    }

    /**
     * show voyage planning data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $data = [
            'voyage_plannings' => $this->voyage_planning,
            'routes' => $this->route,
            'cruises' => $this->cruise
        ];

        return view('voyage-plannings.index', $data);
    }
}