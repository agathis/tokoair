<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 05/10/16
 * Time: 21:25
 */

namespace App\Http\Controllers\RequisitionItem;


use App\Http\Controllers\Controller;
use App\Http\Models\Ingredient;
use App\Http\Models\Requisition;
use App\Http\Models\RequisitionItem;

class RequisitionItemController extends Controller
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection|static[]
     */
    private $ingredient, $requisition, $requisition_item;

    use Actions\Create, Actions\Delete, Actions\Update;

    /**
     * RequisitionItemController constructor.
     */
    public function __construct()
    {
        $this->ingredient = Ingredient::all();
        $this->requisition = Requisition::all();
        $this->requisition_item = RequisitionItem::all();
    }

    /**
     * show requisition item data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $data = [
            'ingredients' => $this->ingredient,
            'requisitions' => $this->requisition,
            'requisition_items' => $this->requisition_item
        ];

        return view('requisition-items.index', $data);
    }
}