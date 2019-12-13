@extends('layouts.app')

@section('content')

    <div class="container">
        <br/>
        <form method="post" action="{{url('event/add')}}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Title">Title:</label>
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <strong> Start Date : </strong>
                    <input class="date form-control" autocomplete="off" type="text" id="startdate" name="startdate">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <strong> End Date : </strong>
                    <input class="date form-control" autocomplete="off" type="text" id="enddate" name="enddate">
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
    <script type="text/javascript">
        $('#startdate').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
        $('#enddate').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
    </script>

@endsection
