<?php

namespace App\Http\Controllers;

use App\Models\StudenWeight;
use Illuminate\Http\Request;

class StudenWeightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weights = StudenWeight::all();
        return view('weightIndex',compact('weights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('weightCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       StudenWeight::create($request->all());
       return redirect()->route('weight.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudenWeight  $studenWeight
     * @return \Illuminate\Http\Response
     */
    public function show(StudenWeight $studenWeight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudenWeight  $studenWeight
     * @return \Illuminate\Http\Response
     */
    public function edit(StudenWeight $studenWeight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudenWeight  $studenWeight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudenWeight $studenWeight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudenWeight  $studenWeight
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudenWeight $studenWeight)
    {
        //
    }
}
