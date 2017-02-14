@extends('layouts.master')

@section ('content')

        <div class="col-sm-8 blog-main">

        <h1>Connected Raspberry Pi Devices:</h1>
 
@if ($pis==null)

        <h3> No Raspberry Pi hosts currently setup. </h3>

@else
        @foreach ($pis as $pi)
            <div class="pi_listing">
                <h2 class="pi_name">
                Hostname: &nbsp 
                <a href="/pi/{{ $pi->id }}">
                    {{ $pi->name }}
                </a>
                  &nbsp - 
                <a href="/#" class="pi-delete-link">
                        Delete
                </a>
                </h2>
            </div>
         @endforeach

@endif         
         <br /><br />

         <h2>
            <a href="/pi/create">
            Add a new Pi to the system
            </a>
         </h2>
        </div>

@endsection