<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 23/09/16
 * Time: 6:24
 */

namespace App\Http\Controllers\Vendor\Actions;


use App\Http\Controllers\Vendor\Requests\VendorRequest;
use App\Http\Models\Vendor;

trait Create
{
    /**
     * create vendor data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCreate()
    {
        return view('vendors.actions.create');
    }

    /**
     * post vendor data request into database
     *
     * @param VendorRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(VendorRequest $request)
    {
        $vendor_input = $request->except(['_token', 'submit']);

        $vendor = new Vendor;

        $vendor->name = $vendor_input['name'];
        $vendor->payment_method = $vendor_input['payment_method'];
        $vendor->bank_account = $vendor_input['bank_account'];
        $vendor->address = $vendor_input['address'];
        $vendor->city = $vendor_input['city'];
        $vendor->zip_code = $vendor_input['zip_code'];
        $vendor->phone = $vendor_input['phone'];
        $vendor->contact_name = $vendor_input['contact_name'];

        $vendor->save();

        return redirect('vendor')->with('success' , 'Data Recorded!');
    }
}