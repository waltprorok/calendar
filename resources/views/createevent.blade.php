@extends('layouts.app')

@section('content')

    <div class="container">
        <br/>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Add Calendar Event</h4>
            </div>
            <div class="panel-body">
                <form method="post" action="{{url('event/add')}}">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <div class="form-group col-md-4">
                                <label for="Title">Title</label>
                                <input type="text" class="form-control" autocomplete="off" name="title"  value="{{ old('title') }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                            <div class="form-group col-md-4">
                                <strong>Start Date</strong>
                                <input class="date form-control" autocomplete="off" type="text" id="start_date" name="start_date"  value="{{ old('start_date') }}">
                                @if ($errors->has('start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                            <div class="form-group col-md-4">
                                <strong>End Date</strong>
                                <input class="date form-control" autocomplete="off" type="text" id="end_date" name="end_date" value="{{ old('end_date') }}">
                                @if ($errors->has('end_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-4">
                            <button type="submit" class="btn btn-success">Add Event</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('#start_date').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
        $('#end_date').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
    </script>

@endsection
