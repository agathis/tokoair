<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 1:39
 */

namespace App\Http\Controllers\Cruise\Actions;


use App\Http\Controllers\Cruise\Requests\CruiseRequest;
use App\Http\Models\Cruise;

trait Update
{

    /**
     * show update cruise data by ID
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUpdate($id)
    {

        $cruise = $this->cruise->where('id', $id)->first();

        $data = [
            'cruise' => $cruise
        ];

        return view('cruises.actions.update', $data);
    }

    /**
     * post cruise update data request into database
     *
     * @param CruiseRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdate(CruiseRequest $request, $id) {

        $cruises_input = $request->except(['_token', 'submit', '_method']);

        $cruises = Cruise::find($id);

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