<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 20/09/16
 * Time: 6:34
 */

namespace App\Http\Controllers\Route\Actions;

use App\Http\Models\Route;

trait Delete
{
    /**
     * delete data by ID
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id){

        $route = Route::find($id);

        $route->delete();

        return redirect('route')->with('success', 'Data Deleted');

    }
}