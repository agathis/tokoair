<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 23/09/16
 * Time: 6:38
 */

namespace App\Http\Controllers\Vendor\Actions;


use App\Http\Models\Vendor;

trait Delete
{
    /**
     * delete vendor data by ID
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id)
    {
        $vendor = Vendor::find($id);

        $vendor->delete();

        return redirect('vendor')->with('success' , 'Data Deleted!');
    }
}