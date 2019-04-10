<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productAd;

class productAdController extends Controller
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
        return view('productAdEntry');
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
            'title' => 'required',
            'description' => 'required'
        ]);

        $productad = new productAd([
            'title' => $request->get('title'),
            'description' => $request->get('description')

        ]);

        if ($request->hasfile('image')) {
            $file=$request->file('image');
            $extension = $file->getClientOrginalExtension(); //getting image extension...
            $filename = time().'.'.$extension;
            $file->move('uploads/productad/','$filename');
            $productad->image = $filename;
        } else {
            return $request;
            $productad->image ='';
        }

        $productad->save();
        return redirect()->route('home')->with('success','Product Advertisement Created Successfully');
        
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
}
