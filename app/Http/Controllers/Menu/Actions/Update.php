<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 23/09/16
 * Time: 6:06
 */

namespace App\Http\Controllers\Menu\Actions;

use App\Http\Controllers\Menu\Requests\MenuRequest;
use App\Http\Models\Menu;

trait Update
{
    /**
     * update menu data by ID
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUpdate($id)
    {

        $data = [
            'menu' => $this->menu->where('id', $id)->first(),
            'recipes' => $this->recipe
        ];

        return view('menus.actions.update', $data);

    }

    public function postUpdate(MenuRequest $request, $id)
    {
        $menu_input = $request->except(['_token', 'submit', '_method']);

        $menus = Menu::find($id);

        $menus->name = $menu_input['name'];
        $menus->appetizer = $menu_input['appetizer'];
        $menus->main_dish = $menu_input['main_dish'];
        $menus->dessert = $menu_input['dessert'];
        $menus->beverage = $menu_input['beverage'];
        $menus->type = $menu_input['type'];

        $menus->save();

        return redirect('menu')->with('success' , 'Data Updated!');
    }
}