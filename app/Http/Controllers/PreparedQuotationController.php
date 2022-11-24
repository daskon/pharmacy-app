<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PreparedQuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data =  DB::select('select order_id, status, precription_models.note, SUM(amount) AS amount FROM quaotations INNER JOIN precription_models ON precription_models.id = quaotations.order_id WHERE quaotations.user_id='.Auth::id().'  GROUP by(order_id);');
        return view('user.quotation', compact('data'));
    }

    /**
     * update quotation status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required'
        ]);

        DB::table('quaotations')->where('order_id', $request->id)->update(array('status' => $request->status));

        return redirect('quotation');
    }
}
