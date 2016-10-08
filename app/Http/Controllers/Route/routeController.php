<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 20/09/16
 * Time: 3:59
 */

namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;
use App\Http\Models\Port;
use App\Http\Models\Route;


class routeController extends Controller
{

    /**
     * @var \Illuminate\Database\Eloquent\Collection|static[]
     */
    private $route, $port;

    /**
     * trait CRUD
     */
    use Actions\Create, Actions\Delete, Actions\Update;

    /**
     * routeController constructor.
     */
    public function __construct()
    {
        $this->route = Route::all();
        $this->port = Port::all();
    }

    /**
     * show data of route
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex(){

        //insert datas into array
        $data = [
          'routes' => $this->route,
            'ports' => $this->port
        ];

        //return view
        return view('routes.index', $data);

    }
}