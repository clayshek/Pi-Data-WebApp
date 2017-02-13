<?php

namespace App\Http\Controllers;

use App\Ups;
use Illuminate\Http\Request;

class UpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ups.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ups  $ups
     * @return \Illuminate\Http\Response
     */
    public function show(Ups $ups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ups  $ups
     * @return \Illuminate\Http\Response
     */
    public function edit(Ups $ups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ups  $ups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ups $ups)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ups  $ups
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ups $ups)
    {
        //
    }
}
