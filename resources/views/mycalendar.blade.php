@extends('layouts.app')

@section('content')

<div class="row">

    <div class="panel panel-default">

        <div class="panel-heading">Calender</div>

        <div class="panel-body">

            {!! $calendar->calendar() !!}

            {!! $calendar->script() !!}

        </div>
    </div>
</div>
@endsection
