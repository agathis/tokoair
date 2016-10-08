<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 19:56
 */

namespace App\Http\Controllers\VoyageClass;


use App\Http\Controllers\Controller;
use App\Http\Models\VoyageClass;

class voyageClassController extends Controller
{

    use Actions\Create, Actions\Delete, Actions\Update;
    /**
     * @var \Illuminate\Database\Eloquent\Collection|static[]
     */
    private $voyage_class;

    /**
     * VoyageController constructor.
     */
    public function __construct()
    {
        $this->voyage_class = VoyageClass::all();
    }

    /**
     * show voyage class data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $data = [
            'voyage_classes' => $this->voyage_class
        ];

        return view('voyage-classes.index', $data);
    }
}