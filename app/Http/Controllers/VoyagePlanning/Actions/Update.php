<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 21:15
 */

namespace App\Http\Controllers\VoyagePlanning\Actions;


use App\Http\Controllers\VoyagePlanning\Requests\VoyagePlanningRequest;
use App\Http\Models\VoyagePlanning;

trait Update
{
    /**
     * update voyage planning data by ID
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUpdate($id)
    {
        $voyage_planning = VoyagePlanning::find($id);

        $data = [
            'voyage_planning' => $voyage_planning,
            'routes' => $this->route,
            'cruises' => $this->cruise
        ];

        return view('voyage-plannings.actions.update', $data);
    }

    /**
     * post voyage planning data request into database
     *
     * @param VoyagePlanningRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdate(VoyagePlanningRequest $request, $id)
    {
        $voyage_plannings_input = $request->except(['_token', 'submit', '_method']);

        $voyage_plannings = VoyagePlanning::find($id);

        $voyage_plannings->departure = $voyage_plannings_input['departure'];
        $voyage_plannings->arrival = $voyage_plannings_input['arrival'];
        $voyage_plannings->safety_factor = $voyage_plannings_input['safety_factor'];
        $voyage_plannings->crew_qty = $voyage_plannings_input['crew_qty'];
        $voyage_plannings->route_id = $voyage_plannings_input['route_id'];
        $voyage_plannings->cruise_id = $voyage_plannings_input['cruise_id'];

        $voyage_plannings->save();

        return redirect('voyage-planning')->with('success' , 'Data Updated!');
    }

}