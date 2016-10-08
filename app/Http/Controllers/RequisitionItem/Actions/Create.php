<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 05/10/16
 * Time: 21:36
 */

namespace App\Http\Controllers\RequisitionItem\Actions;


use App\Http\Controllers\RequisitionItem\Requests\RequisitionItemRequest;
use App\Http\Models\RequisitionItem;

trait Create
{
    /**
     * create requisition item data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {
        $data = [
          'ingredients' => $this->ingredient,
            'requisitions' => $this->requisition
        ];

        return view('requisition-items.actions.create', $data);
    }

    /**
     * post requisition data into database
     *
     * @param RequisitionItemRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(RequisitionItemRequest $request)
    {
        $requisition_item_input = $request->except(['_token', 'submit']);

        $requisition_items = new RequisitionItem;

        $requisition_items->ingredient_id = $requisition_item_input['ingredient'];
        $requisition_items->quantity = $requisition_item_input['quantity'];
        $requisition_items->price = $requisition_item_input['price'];
        $requisition_items->requisition_id = $requisition_item_input['requisition'];
        $requisition_items->unit = $requisition_item_input['unit'];

        $requisition_items->save();

        return redirect('requisition-item')->with('success' , 'Data Recorded!');
    }
}