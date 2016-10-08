<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 3:17
 */

namespace App\Http\Controllers\User\Actions;


use App\Http\Controllers\User\Requests\UserRequest;
use App\Http\Models\RoleUser;
use App\Http\Models\User;

trait Create
{
    /**
     * create user data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {
        $data = [
            'role' => $this->role,
        ];

        return view('users.actions.create', $data);
    }

    /**
     * post user data request into database
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(UserRequest $request){

        $user_input = $request->except(['_token', 'submit']);

        $user = new User;

        $user->username = $user_input['username'];
        $user->password = md5($user_input['password']);

        $user->save();

        $role_user = New RoleUser;

        $role_user->user_id = $user->id;
        $role_user->role_id = $user_input['role'];

        $role_user->save();

        return redirect('user')->with('success' , 'Data Recorded!');
    }
}