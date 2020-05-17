<?php

namespace App\Http\Controllers;
use App\Item;
use App\OrderItem;
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
    public function index()
    {
        //
        $fav = DB::table('orderitem')
        ->join('orderlog', 'orderlog.olid', '=', 'orderitem.olid')
        ->join('item', 'item.iid', '=', 'orderitem.iid')
        ->where('orderlog.uid',session('uid'))
        ->where('orderlog.status','inactive')
        ->select('orderitem.*','item.iname')
        ->get();
        $order=OrderLog::where('status','inactive')->first();
        $amount=null;
        if($order ){
            //$olid=$fav[0]->olid;
            $amount= DB::table('orderitem')->where('olid',$order->olid)->sum('price');
        }




        return view('customer.cart',['items'=>$fav,'amount'=>$amount,'order'=>$order]);

    }
    public function addcart(Item $item ,Request $req)
    {
        //
        $order=OrderLog::where('status','inactive' )->first();
        if($order==null){

            $order=new OrderLog;
            $order->uid=session('uid');
            $order->date= Carbon::now();
            $order->status='inactive';
            $order->save();

        }
        return view('customer.addcart',['items'=>$item]);

    }
    public function additemcart(Request $req )
    {
        //
        $order=OrderLog::where('status','inactive' )->first();
        $cart=new OrderItem;
        $cart->iid=$req->iid;
        $cart->quantity=$req->quantity;
        $cart->price=$req->price*$req->quantity;
        $cart->olid=$order->olid;
        if($cart->save())
        {
            return redirect()->route('customer.index');
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
     * @param  \App\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function show(OrderItem $orderItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderItem $orderItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $item=Item::where('iid', $request->iid)->first();
        $cart=OrderItem::where('otid', $id)->first();
        $cart->quantity=$request->quantity;
        $cart->price=$item->iprice*$request->quantity;
        $cart->save();
        return redirect()->route('cart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderItem  $orderItem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(OrderItem::destroy($id))
            {return redirect()->route('cart.index');}



    }
}
