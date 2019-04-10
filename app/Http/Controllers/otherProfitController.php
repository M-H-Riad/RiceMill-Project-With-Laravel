<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\otherProfit;

class otherProfitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $otherprofit= otherProfit::all();
        return view('otherProfitShow',compact('otherprofit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('otherProfitEntry');
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
            'productName' => 'required',
            'productQuantity' => 'required',
            'totalprofit' => 'required'
        ]);

        $otherProfit = new otherProfit([
            'productName' => $request->get('productName'),
            'productQuantity' => $request->get('productQuantity'),
            'totalprofit' => $request->get('totalprofit')

        ]);

        $otherProfit->save();
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
        $otherprofit= otherprofit::find($id);
        return view('editPage.otherprofitEntryEdit',compact('otherprofit','id'));
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
            'productName' => 'required',
            'productQuantity' => 'required',
            'totalprofit' => 'required'
        ]);

        $otherprofit= otherProfit::find($id);

        $otherprofit->productName = $request->input('productName');
        $otherprofit->productQuantity = $request->input('productQuantity');
        $otherprofit->totalprofit = $request->input('totalprofit');

        $otherprofit->save();
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
        $otherprofit = otherprofit::find($id);
        $otherprofit->delete();
        return redirect()->route('home')->with('success','Data Deleted Successfully');
    }
}
