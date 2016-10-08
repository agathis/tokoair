<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 21:00
 */

namespace App\Http\Controllers\VoyagePlanning\Actions;


use App\Http\Controllers\VoyagePlanning\Requests\VoyagePlanningRequest;
use App\Http\Models\VoyagePlanning;

trait Create
{
    /**
     * create new voyage planning data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {
        $data = [
            'routes' => $this->route,
            'cruises' => $this->cruise
        ];

        return view('voyage-plannings.actions.create', $data);
    }

    /**
     * post voyage planning data request into database
     *
     * @param VoyagePlanningRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(VoyagePlanningRequest $request)
    {
        $voyage_plannings_input = $request->except(['_token', 'submit']);

        $voyage_plannings = new VoyagePlanning;

        $voyage_plannings->departure = $voyage_plannings_input['departure'];
        $voyage_plannings->arrival = $voyage_plannings_input['arrival'];
        $voyage_plannings->safety_factor = $voyage_plannings_input['safety_factor'];
        $voyage_plannings->crew_qty = $voyage_plannings_input['crew_qty'];
        $voyage_plannings->route_id = $voyage_plannings_input['route_id'];
        $voyage_plannings->cruise_id = $voyage_plannings_input['cruise_id'];

        $voyage_plannings->save();

        return redirect('voyage-planning')->with('success' , 'Data Recorded!');
    }
}