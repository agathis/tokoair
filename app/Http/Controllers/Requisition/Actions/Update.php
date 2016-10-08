<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 05/10/16
 * Time: 7:45
 */

namespace App\Http\Controllers\Requisition\Actions;


use App\Http\Controllers\Requisition\Requests\RequisitionRequest;
use App\Http\Models\Requisition;

trait Update
{
    /**
     * update requisition data by ID
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUpdate($id)
    {
        $data = [
            'requisition' => Requisition::find($id),
            'voyage_plannings' => $this->voyage_planning,
            'vendors' => $this->vendor
        ];

        return view('requisitions.actions.update', $data);
    }

    /**
     * post requisition update data into database
     *
     * @param RequisitionRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdate(RequisitionRequest $request, $id)
    {
        $requisition_input = $request->except(['_token', 'submit', '_method']);

        $requisitions = Requisition::find($id);

        $requisitions->number = $requisition_input['number'];
        $requisitions->voyage_planning_id = $requisition_input['voyage_planning'];
        $requisitions->date = $requisition_input['date'];
        $requisitions->total_amount = $requisition_input['total_amount'];
        $requisitions->vendor_id = $requisition_input['vendor'];
        $requisitions->approval_status = 0; //means it will reviewed
        $requisitions->requested_by = 1; //means current user who logged in

        $requisitions->save();

        return redirect('requisition')->with('success' , 'Data Updated!');
    }

}