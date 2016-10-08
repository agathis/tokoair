<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 05/10/16
 * Time: 7:43
 */

namespace App\Http\Controllers\Requisition\Actions;


use App\Http\Models\Requisition;

trait Delete
{
    /**
     * delete requisition data by ID
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id)
    {
        $requisition = Requisition::find($id);

        $requisition->delete();

        return redirect('requisition')->with('success' , 'Data Deleted!');
    }
}