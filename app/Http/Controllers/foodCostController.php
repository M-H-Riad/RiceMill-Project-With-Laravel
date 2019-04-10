<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\foodCost;

class foodCostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodcost= foodCost::all();
        return view('foodCostShow',compact('foodcost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foodCostEntry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'foodName' => 'required',
            'foodAmount' => 'required',
            'totalPrice' => 'required'
        ]);

        $foodCost = new foodCost([
            'foodName' => $request->get('foodName'),
            'foodAmount' => $request->get('foodAmount'),
            'totalPrice' => $request->get('totalPrice')

        ]);
        $foodCost->save();
        return redirect()->route('home')->with('success','Data Added Successfully');
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
        $foodcost= foodcost::find($id);
        return view('editPage.foodcostEntryEdit',compact('foodcost','id'));
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
        $this->validate($request,[
            'foodName' => 'required',
            'foodAmount' => 'required',
            'totalPrice' => 'required'
        ]);

        $foodcost= foodcost::find($id);

        $foodcost->foodName = $request->input('foodName');
        $foodcost->foodAmount = $request->input('foodAmount');
        $foodcost->totalPrice = $request->input('totalPrice');

        $foodcost->save();
        return redirect()->route('home')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foodcost = foodcost::find($id);
        $foodcost->delete();
        return redirect()->route('home')->with('success','Data Deleted Successfully');
    }
}
