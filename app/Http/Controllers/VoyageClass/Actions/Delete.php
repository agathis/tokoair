<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 20:14
 */

namespace App\Http\Controllers\VoyageClass\Actions;


use App\Http\Models\VoyageClass;

trait Delete
{
    /**
     * delete voyage class data by ID
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id)
    {
        $voyage_class = VoyageClass::find($id);

        $voyage_class->delete();

        return redirect('voyage-class')->with('success' , 'Data Deleted!');
    }
}