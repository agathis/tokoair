<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 05/10/16
 * Time: 22:21
 */

namespace App\Http\Controllers\RequisitionItem\Actions;


use App\Http\Models\RequisitionItem;

trait Delete
{
    /**
     * delete requisition item data by ID
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id)
    {
        $requisition_item = RequisitionItem::find($id);

        $requisition_item->delete();

        return redirect('requisition-item')->with('success' , 'Data Deleted!');
    }
}