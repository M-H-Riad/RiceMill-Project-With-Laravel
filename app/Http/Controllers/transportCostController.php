<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transportCost;

class transportCostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportcost= transportCost::all();
        return view('transportCostShow',compact('transportcost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transportCostEntry');
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
            'transportName' => 'required',
            'transportNumber' => 'required',
            'source' => 'required',
            'destination' => 'required',
            'transportCost' => 'required',
            'totalCost' => 'required'
        ]);

        $transportCost = new transportCost([
            'transportName' => $request->get('transportName'),
            'transportNumber' => $request->get('transportNumber'),
            'source' => $request->get('source'),
            'destination' => $request->get('destination'),
            'transportCost' => $request->get('transportCost'),
            'totalCost' => $request->get('totalCost')

        ]);
        $transportCost->save();
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
        $transportcost= transportcost::find($id);
        return view('editPage.transportcostEntryEdit',compact('transportcost','id'));
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
            'transportName' => 'required',
            'transportNumber' => 'required',
            'source' => 'required',
            'destination' => 'required',
            'transportCost' => 'required',
            'totalCost' => 'required'
        ]);

        $transportcost= transportcost::find($id);

        $transportcost->transportName = $request->input('transportName');
        $transportcost->transportNumber = $request->input('transportNumber');
        $transportcost->source = $request->input('source');
        $transportcost->destination = $request->input('destination');
        $transportcost->transportCost = $request->input('transportCost');
        $transportcost->totalCost = $request->input('totalCost');

        $transportcost->save();
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
        $transportcost = transportcost::find($id);
        $transportcost->delete();
        return redirect()->route('home')->with('success','Data Deleted Successfully');
    }
}
