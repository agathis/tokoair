<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 23/09/16
 * Time: 6:19
 */

namespace App\Http\Controllers\Vendor;


use App\Http\Controllers\Controller;
use App\Http\Models\Vendor;

class vendorController extends Controller
{
    /**
     * @var \Illuminate\Database\Eloquent\Collection|static[]
     */
    private $vendor;

    use Actions\Create, Actions\Delete, Actions\Update;

    /**
     * vendorController constructor.
     */
    public function __construct()
    {
        $this->vendor = Vendor::all();
    }

    /**
     * show vendor data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $data = [
          'vendors' => $this->vendor,
        ];

        return view('vendors.index', $data);
    }
}