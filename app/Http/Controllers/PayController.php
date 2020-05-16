<?php

namespace App\Http\Controllers;
use App\Item;
use App\OrderItem;
use App\Payment;
use App\OrderLog;
use Illuminate\Http\Request;
Use \Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {
        //

        $payment=DB::table('payment')
        ->join('orderlog', 'orderlog.olid', '=', 'payment.olid')

        ->where('orderlog.uid',session('uid'))


        ->get();
        view('customer.payment',['payment'=>$payment]);
    }


}
