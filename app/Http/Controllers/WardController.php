<?php

namespace App\Http\Controllers;

use App\Ward;
use Illuminate\Http\Request;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Ward::all();
        $wards = Ward::all();
        return view('wards.crud',compact('wards'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wards.details');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'room'=>'required',
            'doctor'=>'required',
            'operation_theater'=>'required',
            'hospital_id'=>'required',
        ]);
        Ward::create($request->all());
        return redirect()->route('wards.index')->with('success','ward created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function show(Ward $ward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function edit(Ward $ward)
    {
        return view('wards.update',compact('ward'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ward $ward)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'room'=>'required',
            'doctor'=>'required',
            'operation_theater'=>'required',
            'hospital_id'=>'required',
        ]);
        $ward->update($request->all());
        return redirect()->route('wards.index')->with('success','entry updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ward $ward)
    {
        $ward->delete();
        return redirect()->route('wards.index')->with('success','record deleted successfully.');
    }
}
