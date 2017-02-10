<?php

namespace App\Http\Controllers;

use App\Pi;
use App\PiHeartbeat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $pis = \App\Pi::first();

        $pis = $pis->get();

        return view('pi.index', compact('pis'));
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
     * @param  \App\Pi  $pi
     * @return \Illuminate\Http\Response
     */
    public function show(\App\PiHeartbeat $pi)
    {
        // Compare last heartbeat time to current time. If > 12 min, not current.
        $now = Carbon::now();
        $heartbeat_age_min = $pi->updated_at->diffInMinutes($now);
        //dd($heartbeat_age_min); For testing & debug 

        if ($heartbeat_age_min > 12)
            $pi->current = false;
        else
            $pi->current = true;

        //dd($pi->current); For testing & debug 

        return view('pi.show', compact('pi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pi  $pi
     * @return \Illuminate\Http\Response
     */
    public function edit(Pi $pi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pi  $pi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pi $pi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pi  $pi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pi $pi)
    {
        //
    }
}
