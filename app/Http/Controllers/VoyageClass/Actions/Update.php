<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 28/09/16
 * Time: 20:16
 */

namespace App\Http\Controllers\VoyageClass\Actions;


use App\Http\Controllers\VoyageClass\Requests\VoyageClassRequest;
use App\Http\Models\VoyageClass;

trait Update
{
    /**
     * update voyage class data by ID
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUpdate($id)
    {
        $voyage_class = VoyageClass::find($id);

        $data = [
            'voyage_class' => $voyage_class,
        ];

        return view('voyage-classes.actions.update', $data);
    }

    /**
     * post voyage planning data request into database
     *
     * @param VoyageClassRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdate(VoyageClassRequest $request, $id)
    {
        $voyage_class_input = $request->except(['_token', 'submit', '_method']);

        $voyage_class = VoyageClass::find($id);

        $voyage_class->class = $voyage_class_input['class'];
        $voyage_class->description = $voyage_class_input['description'];

        $voyage_class->save();

        return redirect('voyage-class')->with('success' , 'Data Updated!');
    }
}