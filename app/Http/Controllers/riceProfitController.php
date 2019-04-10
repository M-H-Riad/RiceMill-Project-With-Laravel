<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\riceProfit;

class riceProfitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riceprofit= riceProfit::all();
        return view('riceProfitShow',compact('riceprofit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('riceProfitEntry');
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
            'riceName' => 'required',
            'riceQuality' => 'required',
            'riceQuantity' => 'required',
            'unitPrice' => 'required',
            'totalPrice' => 'required',
            'customerName' => 'required',
            'customerPhone' => 'required',
            'coustmerAddress' => 'required'
        ]);

        $riceProfit = new riceProfit([
            'riceName' => $request->get('riceName'),
            'riceQuality' => $request->get('riceQuality'),
            'riceQuantity' => $request->get('riceQuantity'),
            'unitPrice' => $request->get('unitPrice'),
            'totalPrice' => $request->get('totalPrice'),
            'coustmerName' => $request->get('coustmerName'),
            'coustmerPhone' => $request->get('coustmerPhone'),
            'coustmerAddress' => $request->get('coustmerAddress')
        ]);
        
        $riceProfit->save();
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
        $riceprofit= riceprofit::find($id);
        return view('editPage.riceprofitEntryEdit',compact('riceprofit','id'));
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
            'riceName' => 'required',
            'riceQuality' => 'required',
            'riceQuantity' => 'required',
            'unitPrice' => 'required',
            'totalPrice' => 'required',
            'customerName' => 'required',
            'customerPhone' => 'required',
            'coustmerAddress' => 'required'
        ]);

        $riceprofit= riceprofit::find($id);

        $riceprofit->riceName = $request->input('riceName');
        $riceprofit->riceQuality = $request->input('riceQuality');
        $riceprofit->riceQuantity = $request->input('riceQuantity');
        $riceprofit->unitPrice = $request->input('unitPrice');
        $riceprofit->totalPrice = $request->input('totalPrice');
        $riceprofit->sellerName = $request->input('sellerName');
        $riceprofit->sellerPhone = $request->input('sellerPhone');
        $riceprofit->sellerAddress = $request->input('sellerAddress');

        $riceprofit->save();
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
        $riceprofit = riceprofit::find($id);
        $riceprofit->delete();
        return redirect()->route('home')->with('success','Data Deleted Successfully');
    }
}
