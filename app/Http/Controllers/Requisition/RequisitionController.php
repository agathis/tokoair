<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 05/10/16
 * Time: 7:16
 */

namespace App\Http\Controllers\Requisition;


use App\Http\Controllers\Controller;
use App\Http\Models\Requisition;
use App\Http\Models\Vendor;
use App\Http\Models\VoyagePlanning;

class RequisitionController extends Controller
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection|static[]
     */
    private $requisition, $voyage_planning, $vendor;

    use Actions\Create, Actions\Delete, Actions\Update, Actions\Status;

    /**
     * RequisitionController constructor.
     */
    public function __construct()
    {
        $this->requisition = Requisition::all();
        $this->voyage_planning = VoyagePlanning::all();
        $this->vendor = Vendor::all();
    }

    /**
     * show requisition data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $data = [
            'requisitions' => $this->requisition,
            'voyage_plannings' => $this->voyage_planning,
            'vendors' => $this->vendor
        ];

        return view('requisitions.index', $data);
    }
}