<?php

namespace App\Http\Controllers;

use App\Pi;
use App\UpsHeartbeat;
use Illuminate\Http\Request;

class UpsHeartbeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (UpsHeartbeat::first())
            {
                $ups = \App\UpsHeartbeat::select('pi_id')->distinct()->get();
                return view('ups.index', compact('ups'));
            }
        else 
            {
                $ups = null;
                return view('ups.index', compact('ups'));
            }
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
     * @param  \App\UpsHeartbeat  $upsHeartbeat
     * @return \Illuminate\Http\Response
     */
    public function show(Pi $id)
    //public function show(UpsHeartbeat $upsHeartbeat)
    {
        return view('ups.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UpsHeartbeat  $upsHeartbeat
     * @return \Illuminate\Http\Response
     */
    public function edit(UpsHeartbeat $upsHeartbeat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UpsHeartbeat  $upsHeartbeat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UpsHeartbeat $upsHeartbeat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UpsHeartbeat  $upsHeartbeat
     * @return \Illuminate\Http\Response
     */
    public function destroy(UpsHeartbeat $upsHeartbeat)
    {
        //
    }
}
