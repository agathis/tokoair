<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 07/10/16
 * Time: 22:07
 */

namespace App\Http\Controllers\Requisition\Actions;


use App\Http\Models\Requisition;

trait Status
{
    /**
     * approval status updated
     *
     * @param $id
     * @param $status
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getStatus($id, $status)
    {
        $requisition = Requisition::find($id);

        if ($status == 2) { //if 2, it means approved
            $requisition->approval_date = date('Y-m-d H:i:s');
        }

        $requisition->approval_status = $status;

        $requisition->save();

        return redirect('requisition')->with('success', 'Status Updated!');
    }
}