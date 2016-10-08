<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 20:07
 */

namespace App\Http\Controllers\VoyageClass\Actions;


use App\Http\Controllers\VoyageClass\Requests\VoyageClassRequest;
use App\Http\Models\VoyageClass;

trait Create
{
    /**
     * create new voyage class data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {
        return view('voyage-classes.actions.create');
    }

    /**
     * post voyage class data request into database
     *
     * @param VoyageClassRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(VoyageClassRequest $request)
    {
        $voyage_class_input = $request->except(['_token', 'submit']);

        $voyage_class = new VoyageClass;

        $voyage_class->class = $voyage_class_input['class'];
        $voyage_class->description = $voyage_class_input['description'];

        $voyage_class->save();

        return redirect('voyage-class')->with('success' , 'Data Recorded!');
    }
}