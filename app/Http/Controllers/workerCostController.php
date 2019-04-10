<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\workerCost;

class workerCostController extends Controller
{
    /**
     * Display a listing of the recostPerWorker.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workercost= workerCost::all();
        return view('workerCostShow',compact('workercost'));
    }

    /**
     * Show the form for creating a new recostPerWorker.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workerCostEntry');
    }

    /**
     * Store a newly created recostPerWorker in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'numOfWorker' => 'required',
            'workingHour' => 'required',
            'costPerWorker' => 'required',
            'totalCost' => 'required'
        ]);

        $workerCost = new workerCost([
            'numOfWorker' => $request->get('numOfWorker'),
            'workingHour' => $request->get('workingHour'),
            'costPerWorker' => $request->get('costPerWorker'),
            'totalCost' => $request->get('totalCost')

        ]);
        $workerCost->save();
        return redirect()->route('home')->with('success','Data Added Successfully');
    }

    /**
     * Display the specified recostPerWorker.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified recostPerWorker.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workercost= workercost::find($id);
        return view('editPage.workercostEntryEdit',compact('workercost','id'));
    }

    /**
     * Update the specified recostPerWorker in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'numOfWorker' => 'required',
            'workingHour' => 'required',
            'costPerWorker' => 'required',
            'totalCost' => 'required'
        ]);

        $workercost= workercost::find($id);

        $workercost->numOfWorker = $request->input('numOfWorker');
        $workercost->workingHour = $request->input('workingHour');
        $workercost->costPerWorker = $request->input('costPerWorker');

        $workercost->save();
        return redirect()->route('home')->with('success','Data Updated Successfully');
    }

    /**
     * Remove the specified recostPerWorker from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workercost = workercost::find($id);
        $workercost->delete();
        return redirect()->route('home')->with('success','Data Deleted Successfully');
    }
}
