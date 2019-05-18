<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use App\App_items;
use Datatables;

class app_itemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        return view('app_items.index');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app_items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'lot_no' => 'required'
        ]);

        //Create Post
        $app_items = new app_items;
        $app_items->lot_no = $request->input('lot_no');
        $app_items->save();

        return redirect('/app_items')->with('success', 'Lot Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $app_items = app_items::find($id);
        return view('app_items.show')->with('app_items', $app_items);
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

    public function getData()
    {
        $app_items = app_items::all();

        if($app_items != NULL)
        {
            foreach($app_items as $key => $value)
            {
                $data[$key]['id']                   = $value['id'];
                $data[$key]['item_description']     = $value['item_description'];
                $data[$key]['specifications']       = $value['specifications'];
                $data[$key]['unit']                 = $value['unit'];
                $data[$key]['unit_price']           = $value['unit_price'];
                $data[$key]['quantity']             = $value['quantity'];
                $data[$key]['amount']               = $value['amount'];
                $data[$key]['cost_center']          = $value['cost_center'];
                $data[$key]['procurement_mode']     = $value['procurement_mode'];
                $data[$key]['acc_no']               = $value['acc_no'];
            }
        }
        // dump($data);
        
        return datatables()->of($app_items)
                    // ->addColumn('btn', button_icon('edit', 'edit', 'edit', ['id' => '{{ $id }}']))
                    ->make(true);
    }
}
