<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 9:53
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{

    /**
     * table name
     *
     * @var string
     */
    protected $table = 'ingredient';

    /**
     * ingredient belongs to categories
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories(){

        return $this->belongsTo('App\Http\Models\Category');

    }
}