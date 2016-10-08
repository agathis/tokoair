<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 23/09/16
 * Time: 5:54
 */

namespace App\Http\Controllers\Menu\Actions;


use App\Http\Controllers\Menu\Requests\MenuRequest;
use App\Http\Models\Menu;

trait Create
{
    /**
     * create menu data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {
        $data = [
            'recipes' => $this->recipe,
        ];

        return view('menus.actions.create', $data);
    }

    /**
     * post menu data request into database
     *
     * @param MenuRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(MenuRequest $request){
        $menu_input = $request->except(['_token', 'submit']);

        $menus = new Menu;

        $menus->name = $menu_input['name'];
        $menus->appetizer = $menu_input['appetizer'];
        $menus->main_dish = $menu_input['main_dish'];
        $menus->dessert = $menu_input['dessert'];
        $menus->beverage = $menu_input['beverage'];
        $menus->type = $menu_input['type'];

        $menus->save();

        return redirect('menu')->with('success' , 'Data Recorded!');
    }

}