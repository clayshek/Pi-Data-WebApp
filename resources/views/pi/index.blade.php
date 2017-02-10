@extends('layouts.master')

@section ('content')

        <div class="col-sm-8 blog-main">

        <h1>Connected Raspberry Pi Devices:</h1>

        @foreach ($pis as $pi)
            <div class="pi_listing">
                <h2 class="pi_name">
                Hostname:  
                <a href="/pi/{{ $pi->id }}">
                    {{ $pi->name }}
                </a>
                </h2>
            </div>
         @endforeach
         
         <br /><br />

         <h2>
            <a href="/pi/create">
            Add a new Pi Device to the system
            </a>
         </h2>
        </div>

@endsection