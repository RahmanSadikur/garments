<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Register;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user=new User;
        // uname => $data['name'],
        // 'email' => $data['email'],
        // 'password' => Hash::make($data['password']),
        // 'phone' => $data['phone'],
        // 'gender' => $data['gender'],
        // 'role' => 4,
        // 'address' => 1,
        // 'status' => 1,
        $user->uname=$request->uname;
        $user->email=$request->email;
        $user->password= Hash::make($request->uname);
        $user->phone=$request->phone;
        $user->gender=$request->gender;
        $user->role=4;
        $user->address=1;
        $user->status=1;

        $user->save();
        return redirect()->route('login.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
        //
        $user=$request->user();
        return view('customer.profile',['user'=>$user]);
    }
    public function update(Request $request, Register $register)
    {
        //
        $user=User::where('uid', session('uid'))->first();
        $user->uname=$request->uname;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->gender=$request->gender;
        $user->save();
        return redirect()->route('register.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
