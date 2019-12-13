@extends('layouts.app')

@section('content')

    <div class="container">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Laravel Full Calendar</h4>
            </div>
            <div class="panel-body">
                {!! $calendar->calendar() !!}
            </div>
        </div>
    </div>

    {!! $calendar->script() !!}

@endsection
