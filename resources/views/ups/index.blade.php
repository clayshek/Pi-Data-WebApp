@extends('layouts.master')

@section ('content')


        <div class="col-sm-8 blog-main">

        <h1>Connected Universal Power Supply (UPS) Devices:</h1>
 
        @if ($ups==null)

                <h3> No UPS devices have reported in. </h3>

        @else
                @foreach ($ups as $ps)
                <div class="pi_listing">
                        <h2 class="ps_name">
                        UPS connected to Pi: &nbsp 
                        <a href="/ups/{{ $ps->pi->id }}">
                        {{ $ps->pi->name }}
                        </a>
                        </h2>
                </div>
                @endforeach

        @endif         
                <br />


                </div>

@endsection