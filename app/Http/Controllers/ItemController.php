<?php

namespace App\Http\Controllers;
use http\Env\Response;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }
    public function showall($scid)
    {
        //
        $item=item::where('scid', $scid)
          ->get();
           return view('guest.index',['items'=>$item]);
    }
    public function showaitem($iid)
    {
        //
        $item=item::where('iid', $iid)->first();

           return view('customer.searchitem',['items'=>$item]);
    }
    public function showallc($scid)
    {
        //
        $item=item::where('scid', $scid)
          ->get();
           return view('customer.index',['items'=>$item]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
    public function search(Request $request){

        // if($request->ajax()) {

        //     $data = Item::where('iname', 'LIKE', $request->search.'%')
        //         ->get();

        //     $output = '';

        //     if (count($data)>0) {

        //         $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';

        //         foreach ($data as $row){

        //             $output .= '<a href="route("item.showitem",'.$row->iid.')"><li class="list-group-item">'.$row->iname.'</a></li>';
        //         }

        //         $output .= '</ul>';
        //     }
        //     else {

        //         $output .= '<li class="list-group-item">'.'No results'.'</li>';
        //     }

        //     return $output;
        //     printf($output);
        // }
        $data = Item::where('iname', 'LIKE', '%'.$request->search.'%')
        ->get();


        return view('customer.index',['items'=>$data]);
    }
}
