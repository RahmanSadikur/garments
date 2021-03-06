<?php

namespace App\Http\Controllers;

use App\OrderLog;
use Illuminate\Http\Request;

class OrderLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $order=OrderLog::where('status','active')
        ->where('uid',session('uid'))->get();
        return view('customer.orderlog',['order'=>$order]);
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
     * @param  \App\OrderLog  $orderLog
     * @return \Illuminate\Http\Response
     */
    public function show(OrderLog $orderLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderLog  $orderLog
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderLog $orderLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderLog  $orderLog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $olid)
    {
        //


        $order=OrderLog::where('olid', $olid)->first();
        $order->status='active';
        $order->save();
        return  redirect()->route('order.index');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderLog  $orderLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderLog $orderLog)
    {
        //
    }
}
