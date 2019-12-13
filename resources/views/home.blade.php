@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Events</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Welcome to the Event Calendar</h2>
                    <p>Learning how to add dates and times to calendar</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
