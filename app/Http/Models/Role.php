<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 2:40
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * table name
     *
     * @var string
     */
    protected $table = 'role';

    /**
     * define table relationship with User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\Http\Models\User');
    }
}