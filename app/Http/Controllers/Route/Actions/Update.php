<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 20/09/16
 * Time: 6:49
 */

namespace App\Http\Controllers\Route\Actions;

use App\Http\Controllers\Route\Requests\PortRequest;
use App\Http\Models\Route;

trait Update
{
    /**
     * update data route by ID
     *
     */
    public function getUpdate($id){

        $route = Route::find($id);

        $data = [
            'ports' => $this->port,
            'routes' => $route
        ];

        return view('routes.actions.update', $data);

    }

    /**
     * post data update into database
     *
     * @param PortRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdate(PortRequest $request, $id){

        $routes_input = $request->except(['_token', 'submit', '_method']);

        $routes = Route::find($id);

        $routes->port_origin = $routes_input['port_origin'];
        $routes->port_destination = $routes_input['port_destination'];
        $routes->eta = $routes_input['eta'];

        $routes->save();

        return redirect('route')->with('success' , 'Data Updated!');
    }

}