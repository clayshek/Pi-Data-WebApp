@extends('layouts.master')

@section ('content')

        <h1>Raspberry Pi Details:</h1>

@if (!$pidata==null) {

        <h3>
            <center>
            <table>
                <tr><td>Hostname:</td><td>  {{ $pidata->hostname }} </td></tr>
                <tr><td>Pi ID: </td><td> {{ $pidata->id }}</td></tr>
                <tr><td>Kernel Version: </td><td> {{ $pidata->kernel }}</td></tr>
                <tr><td>Uptime: </td><td> {{ $pidata->uptime }}</td></tr>
                <tr><td>Local IP Address(es): &nbsp&nbsp </td><td> {{ $pidata->local_ip }}</td></tr>
                <tr><td>Last Heartbeat (ET): </td><td> {{ $pidata->updated_at }}</td></tr>
                <tr><td>Status: </td>

                @if ( $pidata->current )
                    <td style="color:green;"> Online </td>
                @else
                    <td style="color:red;"> Offline </td>
                @endif
                
                </tr>
            </table>
            </center>
        </h3>
}
@else
    <h3>This Pi does not appear to have sent a heartbeat via the API yet.</h3>
@endif
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