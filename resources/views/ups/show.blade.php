@extends('layouts.master')

@section ('content')

<div id="ups-stats" style="overflow:scroll; height:500px;">
    <h1>UPS Stats:</h1>
    <h4>Connected to Raspberry Pi: "{{ $id->name }}"</h4>

<!--
    <h4><a href="javascript:window.open('/ups/{{ $id->id }}/graph/linev','Line Voltage Graph','width=500,height=500')">View Line Voltage Graph</a></h4>
-->
    <h4><a href="/ups/{{ $id->id }}/graph/linev">View Line Voltage Graph</a></h4>

        <h5>
            <center>
            <table border=1>
                <tr>
                    <th>UPS Name</th>
                    <th>Heartbeat Date</th>
                    <th>Local Data Pull Date</th>
                    <th>UPS Model</th>
                    <th>Status</th>
                    <th>Line Volts</th>
                    <th>Load %</th>
                    <th>Battery Charge %</th>
                    <th>Time Left</th>
                    <th>Battery Volts</th>
                    <th>Last Transfer</th>
                </tr>
        @foreach ($id->upsHeartbeats as $heartbeat)                 
                <tr>
                    <td>{{ $heartbeat->upsname }}</td>
                    <td>{{ $heartbeat->created_at }}</td>
                    <td>{{ $heartbeat->date }}</td>
                    <td>{{ $heartbeat->model }}</td>
                    <td>{{ $heartbeat->status }}</td>
                    <td>{{ $heartbeat->linev }}</td>
                    <td>{{ $heartbeat->loadpct }}</td>
                    <td>{{ $heartbeat->bcharge }}</td>
                    <td>{{ $heartbeat->timeleft }}</td>
                    <td>{{ $heartbeat->battv }}</td>
                    <td>{{ $heartbeat->lastxfer }}</td>                
                </tr>
        @endforeach                
            </table>
            </center>
        </h5>

    <h5>
        <a href="{{ URL::previous() }}">
            Back
        </a>
    </h5>
</div>
@endsection