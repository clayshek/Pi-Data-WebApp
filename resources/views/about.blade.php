@extends('layouts.master')

@section ('content')

    <h1>About Pi Data WebApp</h1>

<div class="about-content">
    <h3>
        <p>
            Pi Data WebApp is web application written in PHP, on top of the 
            <a href="https://laravel.com/">Laravel</a> framework (v5.4). The 
            project's purpose is for learning Laravel, API development, Python 
            and Raspberry Pi -> web API proof of concepting.
        </p>
        <p>
            The application has a REST-ful API which receives data pushed from a 
            remote <a href="https://www.raspberrypi.org/">Raspberry Pi</a> which runs 
            scripts (via Crontab) that currently do two things:
        </p>
        <p> 
            * Heartbeat every 10 minutes with various system stats.
        </p>
        <p>
            * Return stats about a USB-connected APC UPS device every hour.
        </p>
        <p>
            The app also has a web front-end which provides for view access to the
            stats, as well an authentication & authorization layer for adding (or deleting)
            new Pi devices to the system to be tracked. Various other functionality
            including SMTP notification exists. Source code can be found on GitHub at 
            link below.
        </p>
    </h3>
</div>


@endsection