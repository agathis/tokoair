<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 23/09/16
 * Time: 6:05
 */

namespace App\Http\Controllers\Menu\Actions;


use App\Http\Models\Menu;

trait Delete
{
    /**
     * delete menu data by ID
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getDelete($id)
    {

        $menu = Menu::find($id);

        $menu->delete();

        return redirect('menu')->with('success' , 'Data Deleted!');

    }
}