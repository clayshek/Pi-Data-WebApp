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
            
        if (Pi::first())
            {
                $pis = \App\Pi::first();
                $pis = $pis->get();
                return view('pi.index', compact('pis'));
            }
        else 
            {
                $pis = null;
                return view('pi.index', compact('pis'));
            }
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate request data
        $this->validate(request(), [
            'name' => 'required'
        ]);

        $pi = new \App\Pi;
        $pi->name = request('name');
        
        //Save it to the database
        $pi->save();

        // Send email upon blog post. Up top, use App\Mail\BlogPosted (or BlogPosted2), 
        // which is created by php artisan make:mail BlogPosted
        // \Mail::to(auth()->user()->email)->send(new BlogPosted2(auth()->user()));

        // Flash messaging & session handling, this sets a flash message, good for one page load, 
        // which will be used on the subsequent page (redirect), see layouts\blog\master.blade.php where used

        session()->flash('message', 'Pi Added.');

        //And then redirect 
        return redirect('/pi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pi  $pi
     * @return \Illuminate\Http\Response
     */

    public function show($pi)
    //public function show(\App\PiHeartbeat $pi)
    {

        $pidata = \App\PiHeartbeat::find($pi);

        if (!$pidata==null) {
            // Compare last heartbeat time to current time. If > 12 min, not current.
            $now = Carbon::now();
            $heartbeat_age_min = $pidata->updated_at->diffInMinutes($now);
            //dd($heartbeat_age_min); For testing & debug 

            if ($heartbeat_age_min > 12)
                $pidata->current = false;
            else
                $pidata->current = true;

            //dd($pidata->current); For testing & debug 
        } //end if

        return view('pi.show', compact('pidata'));
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
