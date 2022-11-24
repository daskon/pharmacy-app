<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuotRequest;
use App\Models\Quaotation;
use Illuminate\Support\Facades\DB;

class QuaotationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuotRequest $request)
    {
        $data = new Quaotation();

        $que = $request->quanity;
        $price = $request->rug_price;

        $data->drugs = $request->drug_name;
        $data->quanity = $request->quanity;

        $amount = $que * $price;
        $data->amount = $amount;

        $data->order_id = $request->prescription_id;

        $data->user_id = $request->user_id;

        DB::table('precription_models')->where('id', $request->id)->update(array('confirm' => $request->order));

        $data->save();

        return redirect()->back();
    }
}
