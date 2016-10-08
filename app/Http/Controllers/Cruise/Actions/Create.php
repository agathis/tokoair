<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 1:04
 */

namespace App\Http\Controllers\Cruise\Actions;


use App\Http\Controllers\Cruise\Requests\CruiseRequest;
use App\Http\Models\Cruise;

trait Create
{
    /**
     * show create cruise data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {
        return view('cruises.actions.create');
    }

    /**
     * post cruise data request into database
     *
     * @param CruiseRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(CruiseRequest $request)
    {
        $cruises_input = $request->except(['_token', 'submit']);

        $cruises = new Cruise;

        $cruises->voyage_number_start = $cruises_input['voyage_number_start'];
        $cruises->voyage_number_end = $cruises_input['voyage_number_end'];
        $cruises->capacity = $cruises_input['capacity'];
        $cruises->cruise_type = $cruises_input['cruise_type'];
        $cruises->imo_number = $cruises_input['imo_number'];
        $cruises->total_capacity = $cruises_input['total_capacity'];

        $cruises->save();

        return redirect('cruise')->with('success' , 'Data Recorded!');
    }

}