<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 5:43
 */

namespace App\Http\Controllers\User\Actions;


use App\Http\Controllers\User\Requests\UserRequest;
use App\Http\Models\RoleUser;
use App\Http\Models\User;

trait Update
{
    /**
     * update user data by ID
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUpdate($id)
    {
        $user = User::find($id);

        $data = [
            'user' => $user,
            'roles' => $this->role,
            'role_users' => $user->roles
        ];

        return view('users.actions.update', $data);

    }

    public function postUpdate(UserRequest $request, $id){

        $user_input = $request->except(['_token', 'submit', '_method']);

        $user = User::find($id);

        $session = 'failed';

        $message = 'Password did not match!';

        //if password matches
        if($user->password == md5($user_input['password'])){
            $session = 'success';
            $message = 'Data Updated!';

            $user->username = $user_input['username'];
            $user->password = md5($user_input['password']);

            $user->save();

            $role_user = RoleUser::all()->where('user_id', $id)->first();

            $role_user->user_id = $user->id;
            $role_user->role_id = $user_input['role'];

            $role_user->save();
        }

        return redirect('user')->with($session, $message);

    }
}