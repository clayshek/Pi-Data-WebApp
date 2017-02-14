@extends('layouts.master')

@section ('content')

    <h1>UPS Stats:</h1>
    <h4>Connected to Raspberry Pi: "{{ $id->name }}"</h4>

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
                    <th>Load Percentage</th>
                    <th>Battery Charge</th>
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
        </h4>

    <h5>
        <a href="{{ URL::previous() }}">
            Back
        </a>
    </h3>

@endsection