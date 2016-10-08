<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 1:37
 */

namespace App\Http\Controllers\Cruise\Actions;


use App\Http\Models\Cruise;

trait Delete
{
    /**
     * delete cruise data by ID
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id)
    {
        $cruise = Cruise::find($id);

        $cruise->delete();

        return redirect('cruise')->with('success', 'Data Deleted');
    }
}