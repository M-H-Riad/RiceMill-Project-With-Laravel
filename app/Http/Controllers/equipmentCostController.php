<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\equipmentCost;

class equipmentCostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipmentcost= equipmentCost::all();
        return view('equipmentCostShow',compact('equipmentcost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipmentCostEntry');
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
            'equipmentName' => 'required',
            'equipmentAmount' => 'required',
            'totalCost' => 'required'
        ]);

        $equipmentCost = new equipmentCost([
            'equipmentName' => $request->get('equipmentName'),
            'equipmentAmount' => $request->get('equipmentAmount'),
            'totalCost' => $request->get('totalCost')

        ]);
        $equipmentCost->save();
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
        $equipmentcost= equipmentcost::find($id);
        return view('editPage.equipmentcostEntryEdit',compact('equipmentcost','id'));
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
            'equipmentName' => 'required',
            'equipmentAmount' => 'required',
            'totalCost' => 'required'
        ]);

        $equipmentcost= equipmentcost::find($id);

        $equipmentcost->equipmentName = $request->input('equipmentName');
        $equipmentcost->equipmentAmount = $request->input('equipmentAmount');
        $equipmentcost->totalCost = $request->input('totalCost');

        $equipmentcost->save();
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
        $equipmentcost = equipmentcost::find($id);
        $equipmentcost->delete();
        return redirect()->route('home')->with('success','Data Deleted Successfully');
    }
}
