<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 0:50
 */

namespace App\Http\Controllers\Cruise;


use App\Http\Controllers\Controller;
use App\Http\Models\Cruise;

class cruiseController extends Controller
{

    /**
     * @var \Illuminate\Database\Eloquent\Collection|static[]
     */
    private $cruise;

    use Actions\Create, Actions\Delete, Actions\Update;

    /**
     * cruiseController constructor.
     */
    public function __construct()
    {
        $this->cruise = Cruise::all();
    }

    /**
     * show cruise data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex(){

        //insert datas into array
        $data = [
            'cruises' => $this->cruise,
        ];

        //return view
        return view('cruises.index', $data);

    }
}