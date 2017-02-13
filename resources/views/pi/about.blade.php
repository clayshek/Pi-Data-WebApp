@extends('layouts.master')

@section ('content')

    <h1>About Pi Data WebApp</h1>

<div class="row marketing">
    <pre><h3>
        Pi Data WebApp is web application written in PHP, on top of the <a href="https://laravel.com/">Laravel</a> 
        framework (v5.4). The project's purpose is for learning Laravel, 
        API development, Python and Raspberry Pi -> web API proof of concepting.
 
        The application has a REST-ful API which receives data from a remote 
        <a href="https://www.raspberrypi.org/">Raspberry Pi</a> which has scripts that currently do two things:
        
            Heartbeat every 10 minutes with various system stats.
            Return stats about a connected APC UPS device every hour.
        
        The Pi scripts are currently written in Bash, but will
        eventually be rewritten in Python.

        The app also has a web front-end which provides for view access to the
        stats, as well an authentication & authorization layer for adding new
        Pi devices to the system to be tracked. Various other functionality
        including SMTP notification exists.

    </h3></pre>
    </div>


@endsection