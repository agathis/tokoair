<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 3:35
 */

namespace App\Observers;


use App\Http\Models\RoleUser;
use App\Http\Models\User;

class UserObserver
{

    /**
     * if user was deleted, role user deleted also
     *
     * @param User $user
     */
    public function deleted(User $user){

        $role_user = RoleUser::all()->where('user_id', $user->id)->first();

        $role_user->delete();

    }
}