@extends('layouts.app')

@section('content')

    <div class="container">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br/>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Laravel Full Calendar</h3>
            </div>
            <div class="panel-body">
                {!! $calendar->calendar() !!}
            </div>
        </div>
    </div>

    {!! $calendar->script() !!}


@endsection
