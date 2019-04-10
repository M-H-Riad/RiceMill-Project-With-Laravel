<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\otherCost;

class otherCostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $othercost= otherCost::all();
        return view('otherCostShow',compact('othercost'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('otherCostEntry');
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
            'costName' => 'required',
            'productQuantity' => 'required',
            'totalCost' => 'required'
        ]);

        $otherCost = new otherCost([
            'costName' => $request->get('costName'),
            'productQuantity' => $request->get('productQuantity'),
            'totalCost' => $request->get('totalCost')

        ]);
        $otherCost->save();
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
        $othercost= othercost::find($id);
        return view('editPage.othercostEntryEdit',compact('othercost','id'));
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
            'costName' => 'required',
            'productQuantity' => 'required',
            'totalCost' => 'required'
        ]);

        $othercost= othercost::find($id);

        $othercost->costName = $request->input('costName');
        $othercost->productQuantity = $request->input('productQuantity');
        $othercost->totalCost = $request->input('totalCost');

        $othercost->save();
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
        $othercost = othercost::find($id);
        $othercost->delete();
        return redirect()->route('home')->with('success','Data Deleted Successfully');
    }
}
