<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 22/09/16
 * Time: 10:18
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * table name
     *
     * @var string
     */
    protected $table = 'category';

    /**
     * category has many ingredient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ingredients()
    {
        return $this->hasMany('App\Http\Models\Ingredient');
    }
}