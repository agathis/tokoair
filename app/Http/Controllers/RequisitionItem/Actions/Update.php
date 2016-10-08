<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 05/10/16
 * Time: 22:25
 */

namespace App\Http\Controllers\RequisitionItem\Actions;


use App\Http\Controllers\RequisitionItem\Requests\RequisitionItemRequest;
use App\Http\Models\RequisitionItem;

trait Update
{
    /**
     * update requisition item data by ID
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUpdate($id)
    {
        $data = [
            'requisition_item' => RequisitionItem::find($id),
            'ingredients' => $this->ingredient,
            'requisitions' => $this->requisition
        ];

        return view('requisition-items.actions.update', $data);
    }

    /**
     * post requisition update data into database
     *
     * @param RequisitionItemRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdate(RequisitionItemRequest $request, $id)
    {
        $requisition_item_input = $request->except(['_token', 'submit', '_method']);

        $requisition_items = RequisitionItem::find($id);

        $requisition_items->ingredient_id = $requisition_item_input['ingredient'];
        $requisition_items->quantity = $requisition_item_input['quantity'];
        $requisition_items->price = $requisition_item_input['price'];
        $requisition_items->requisition_id = $requisition_item_input['requisition'];
        $requisition_items->unit = $requisition_item_input['unit'];

        $requisition_items->save();

        return redirect('requisition-item')->with('success' , 'Data Updated!');
    }
}