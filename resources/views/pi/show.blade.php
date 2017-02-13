@extends('layouts.master')

@section ('content')

        <h1>Raspberry Pi Details:</h1>

        <h3>
            <center>
            <table>
                <tr><td>Hostname:</td><td>  {{ $pi->hostname }} </td></tr>
                <tr><td>Pi ID: </td><td> {{ $pi->id }}</td></tr>
                <tr><td>Kernel Version: </td><td> {{ $pi->kernel }}</td></tr>
                <tr><td>Uptime: </td><td> {{ $pi->uptime }}</td></tr>
                <tr><td>Local IP Address(es): &nbsp&nbsp </td><td> {{ $pi->local_ip }}</td></tr>
                <tr><td>Last Heartbeat (ET): </td><td> {{ $pi->updated_at }}</td></tr>
                <tr><td>Status: </td>

                @if ( $pi->current )
                    <td style="color:green;"> Online </td>
                @else
                    <td style="color:red;"> Offline </td>
                @endif
                
                </tr>
            </table>
            </center>
        </h3>

        <h3>
            <a href="\#">
                Delete this Pi
            </a>
        </h3>

        <h3>
            <a href="{{ URL::previous() }}">
                Back
            </a>
        </h3>

@endsection