<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 05/10/16
 * Time: 7:26
 */

namespace App\Http\Controllers\Requisition\Actions;


use App\Http\Controllers\Requisition\Requests\RequisitionRequest;
use App\Http\Models\Requisition;

trait Create
{
    /**
     * create requisition data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {
        $data = [
            'voyage_plannings' => $this->voyage_planning,
            'vendors' => $this->vendor
        ];

        return view('requisitions.actions.create', $data);
    }

    /**
     * post requisition data into database
     *
     * @param RequisitionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(RequisitionRequest $request)
    {
        $requisition_input = $request->except(['_token', 'submit']);

        $requisitions = new Requisition;

        $requisitions->number = $requisition_input['number'];
        $requisitions->voyage_planning_id = $requisition_input['voyage_planning'];
        $requisitions->date = $requisition_input['date'];
        $requisitions->total_amount = $requisition_input['total_amount'];
        $requisitions->vendor_id = $requisition_input['vendor'];
        $requisitions->approval_status = 0; //means it will reviewed
        $requisitions->requested_by = 1; //means current user who logged in

        $requisitions->save();

        return redirect('requisition')->with('success' , 'Data Recorded!');
    }
}