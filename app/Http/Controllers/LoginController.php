<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * user login form
     *
     * @return void
     */
    public function index()
    {
        return view('Auth.Login');
    }

    /**
     * login users
     *
     * @param  mixed $request
     * @return void
     */
    public function store(StoreLoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = User::where('email', $email)->first();

            Auth::login($user);

            if(Auth()->user()->role == '1')
            {
                return redirect('admin-dashboard');
            }
            else {
                return redirect('user-dashboard');
            }
        }
        else {
            return back()->with('error', 'Invalid credentials!');
        }
    }

    /**
     * logout users
     *
     * @return void
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
