<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ricecost;

class ricecostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $ricecost= ricecost::all();
        return view('ricecostShow',compact('ricecost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ricecostEntry');
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
            'sellerName' => 'required',
            'sellerPhone' => 'required',
            'sellerAddress' => 'required',
        ]);

        $ricecost = new ricecost([
            'riceName' => $request->get('riceName'),
            'riceQuality' => $request->get('riceQuality'),
            'riceQuantity' => $request->get('riceQuantity'),
            'unitPrice' => $request->get('unitPrice'),
            'totalPrice' => $request->get('totalPrice'),
            'sellerName' => $request->get('sellerName'),
            'sellerPhone' => $request->get('sellerPhone'),
            'sellerAddress' => $request->get('sellerAddress')
        ]);
        $ricecost->save();
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
        $ricecost= ricecost::find($id);
        return view('editPage.riceCostEntryEdit',compact('ricecost','id'));
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
            'sellerName' => 'required',
            'sellerPhone' => 'required',
            'sellerAddress' => 'required',
        ]);

        $ricecost= ricecost::find($id);

        $ricecost->riceName = $request->input('riceName');
        $ricecost->riceQuality = $request->input('riceQuality');
        $ricecost->riceQuantity = $request->input('riceQuantity');
        $ricecost->unitPrice = $request->input('unitPrice');
        $ricecost->totalPrice = $request->input('totalPrice');
        $ricecost->sellerName = $request->input('sellerName');
        $ricecost->sellerPhone = $request->input('sellerPhone');
        $ricecost->sellerAddress = $request->input('sellerAddress');

        $ricecost->save();
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
        $ricecost = ricecost::find($id);
        $ricecost->delete();
        return redirect()->route('home')->with('success','Data Deleted Successfully');
    }
}
