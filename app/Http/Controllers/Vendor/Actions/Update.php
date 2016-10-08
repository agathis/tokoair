<?php
/**
 * Created by PhpStorm.
 * User: dmustt
 * Date: 23/09/16
 * Time: 6:40
 */

namespace App\Http\Controllers\Vendor\Actions;

use App\Http\Controllers\Vendor\Requests\VendorRequest;
use App\Http\Models\Vendor;

trait Update
{
    /**
     * update vendor data by ID
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUpdate($id)
    {
        $data = [
            'vendor' => $this->vendor->where('id', $id)->first(),
        ];

        return view('vendors.actions.update', $data);
    }

    /**
     * post vendor update data into database
     *
     * @param VendorRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdate(VendorRequest $request, $id)
    {
        $vendor_input = $request->except(['_token', 'submit', '_method']);

        $vendor = Vendor::find($id);

        $vendor->name = $vendor_input['name'];
        $vendor->payment_method = $vendor_input['payment_method'];
        $vendor->bank_account = $vendor_input['bank_account'];
        $vendor->address = $vendor_input['address'];
        $vendor->city = $vendor_input['city'];
        $vendor->zip_code = $vendor_input['zip_code'];
        $vendor->phone = $vendor_input['phone'];
        $vendor->contact_name = $vendor_input['contact_name'];

        $vendor->save();

        return redirect('vendor')->with('success' , 'Data Updated!');
    }
}