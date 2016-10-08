<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 21:13
 */

namespace App\Http\Controllers\VoyagePlanning\Actions;


use App\Http\Models\VoyagePlanning;

trait Delete
{
    /**
     * delete voyage planning data by ID
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id)
    {
        $voyage_planning = VoyagePlanning::find($id);

        $voyage_planning->delete();

        return redirect('voyage-planning')->with('success' , 'Data Deleted!');
    }
}