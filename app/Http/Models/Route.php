<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    /**
     * table name
     *
     * @var string
     */
    protected $table = 'route';

    /**
     * define a table relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ports(){

        return $this->hasMany('App\Http\Models\Port', 'id', 'port_origin');
    }
}
