<?php

namespace App\Http\Controllers;

use App\Cafe;
use Illuminate\Http\Request;

class CafeController extends Controller
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
        return view('cafes.crud');  
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
            'ward_id'=>'required',
            'hospital_id'=>'required',
        ]);
        Cafe::create($request->all());
        return redirect('Added')->with('success','Bed added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function show(Cafe $cafe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function edit(Cafe $cafe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cafe $cafe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cafe $cafe)
    {
        //
    }
}
