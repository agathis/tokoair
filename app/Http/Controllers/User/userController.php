<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 2:47
 */

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Http\Models\Role;
use App\Http\Models\RoleUser;
use App\Http\Models\User;

class userController extends Controller
{

    /**
     * @var \Illuminate\Database\Eloquent\Collection|static[]
     */
    private $user, $role;

    use Actions\Create, Actions\Delete, Actions\Update;

    /**
     * userController constructor.
     */
    public function __construct()
    {
        $this->user = User::all();
        $this->role = Role::all();
    }

    /**
     * show user data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {

        $role_user = RoleUser::all();

        //insert datas into array
        $data = [
            'users' => $this->user,
            'roles' => $this->role,
            'role_users' => $role_user
        ];

        //return view
        return view('users.index', $data);
    }
}