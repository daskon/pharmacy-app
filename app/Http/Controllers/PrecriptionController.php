<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrescriptionRequest;
use App\Models\PrecriptionModel;
use Illuminate\Support\Facades\Auth;

class PrecriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = PrecriptionModel::where('user_id', Auth::id())->get();

        return view('user.history', compact('records'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrescriptionRequest $request)
    {
        //move and rename array of images
        $images = array();
        if($files=$request->file('images')){
            $count = count($files);
            foreach($files as $file){
                $name= time() . rand(1, 1000) . '.' . 'jpg';
                $file->move('images',$name);
                $images[$count--]=$name;
            }
        }

        $obj = new PrecriptionModel();

        $obj->note = $request->note;
        $obj->address = $request->address;
        $obj->time = $request->time;
        $obj->user_id = $request->user_id;
        $obj->images = $images;
        $obj->save();

        return redirect('history');
    }

    /**
     * Display list of prescriptions information.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $precription = PrecriptionModel::all();
        return view('Admin.prescription-list', compact('precription'));
    }
}
