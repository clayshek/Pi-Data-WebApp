@extends('layouts.master')

@section ('content')

@linechart('Voltages', 'graph_div')

<div id="graph_div"></div>

    <h5>
        <a href="{{ URL::previous() }}">
            Back
        </a>
    </h5>
    
@endsection