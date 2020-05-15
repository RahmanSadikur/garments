<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $req){
    	return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        //$credentials = $request->only('email', 'password');S

        //if (Auth::attempt($credentials)) {
          if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
             $uid=$request->user();
             $request->session()->put('uid', $uid->uid);
            // Authentication passed...
            $request->session()->put('email', $request->email);
            $request->session()->put('password',$request->password);
            return redirect()->route('customer.index');
        }
        else{
            return redirect()->route('login.index');
        }
    }
    public function verify(Request $req){



        $data = User::all();

       $user = User::where('email', $req->email)
                    ->where('password',$req->password)
                    ->first();


    	if($user != null ){
            $req->session()->put('email', $req->email);
            $req->session()->put('password',$req->password);

            if($user->userTypeId==1)
            {
                return redirect()->route('admin.index');
            }
            else if($user->userTypeId==2){
                return redirect()->route('manager.index');
            }
            else {
                return redirect()->route('login.index');
            }


    	}else{
            $req->session()->flash('msg', 'invalid username/password');
    		//return view('login.index');
            return redirect('/login');
    	}
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
