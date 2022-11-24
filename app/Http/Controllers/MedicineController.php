<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDrugsRequest;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * list drugs
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicine = Medicine::paginate(5);

        return view('Admin.medicine-list', compact('medicine'));
    }

    /**
     * Store new drug informations.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDrugsRequest $request)
    {
        $medicine = new Medicine();

        $medicine->drugs = $request->drugName;
        $medicine->amount = $request->price;
        $medicine->discount = $request->discount;

        $medicine->save();

        return redirect('medicine-list')->with('message', 'New Drug Information has recorded successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function findPrice(Request $request)
    {
        $data = Medicine::select('amount')->where('id', $request->id)->first();

        return response()->json($data);
    }

    /**
     * delete drug information.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = Medicine::find($id);
        if($query){
            $query->delete();
            return redirect()->back()->with('message', 'Drug information has been deleted');
        }
    }
}
