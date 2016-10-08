<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 5:36
 */

namespace App\Http\Controllers\User\Actions;


use App\Http\Models\User;

trait Delete
{
    /**
     * delete user data by ID
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id){

        $user = User::find($id);

        $user->delete();

        return redirect('user')->with('success', 'Data Deleted');

    }
}