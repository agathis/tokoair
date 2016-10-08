<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 2:36
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * table
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * define table relationship with Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('App\Http\Models\Role');
    }

    /**
     * define table relationship with Role User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function role_users()
    {
        return $this->hasMany('App\Http\Models\RoleUser');
    }
}