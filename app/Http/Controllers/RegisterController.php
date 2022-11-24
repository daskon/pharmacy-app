<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth.Register')->with('message', 'Pharmacy Register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistrationRequest $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile_no = $request->mobile;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->dob = $request->input('dob');

        $user->save();

        Auth::login($user);

        return redirect('user-dashboard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRegistrationRequest $request, $id)
    {
        $user = User::find($id);

        if($request->file('logo'))
        {
            $logo = time() . rand(1, 1000) . '.' . $request->logo->extension();
            $request->logo->move(public_path('images'), $logo);
            $user->logo = "images/" .$logo;
        }

        $user->name = $request->name;
        $user->mobile_no = $request->mobile;
        $user->address = $request->address;
        $user->dob = $request->dob;

        $user->save();

        return redirect()->back();
    }
}
