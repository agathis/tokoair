<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 20/09/16
 * Time: 5:35
 */

namespace App\Http\Controllers\Route\Actions;

use App\Http\Controllers\Route\Requests\PortRequest;
use App\Http\Models\Route;

trait Create
{
    /**
     * create data route
     *
     */
    public function getCreate(){

        $data = [
            'ports' => $this->port
        ];

        return view('routes.actions.create', $data);

    }

    /**
     * post data request into database
     *
     * @param PortRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(PortRequest $request){

        $routes_input = $request->except(['_token', 'submit']);

        $routes = new Route;

        $routes->port_origin = $routes_input['port_origin'];
        $routes->port_destination = $routes_input['port_destination'];
        $routes->eta = $routes_input['eta'];

        $routes->save();

        return redirect('route')->with('success' , 'Data Recorded!');


    }
}