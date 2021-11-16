@extends('layouts.app')

@section('content')

<!-- <h2>Field Data</h2> -->

<form action="/field_data" method='POST'>
    @csrf

    <div class="form-group">
        <div class="row form-group">
            <div class="col-2 pt-2">
                <label for="name">Attribute Name:</label>
            </div>
            <div class="col-10">
                <input required class="form-control" type="text" name="attribute_name" placeholder='Attribute Name' </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-2 pt-2">
                <label for="name">Database Name:</label>
            </div>
            <div class="col-10">
                <input required required class="form-control" type="text" name="database_name" placeholder="Database Name">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-2 pt-2">
                <label for="name">Form Data:</label>
            </div>
            <div class="col-10 pt-2">
                <input class="checkbox" type="checkbox" name="is_fromdata" value="1">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-2 pt-2">
                <label for="name">Input Type:</label>
            </div>
            <div class="col-10">
                <input required class="form-control" type="text" name="input_type" placeholder="Input Type">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-2 pt-2">
                <label for="name">Options:</label>
            </div>
            <div class="col-10">
                <input required class="form-control" type="text" name="options" placeholder="options">
            </div>
        </div>
        <div class="col-2">
            <input type="submit" class="btn btn-success" value="Save">
        </div>
    </div>

</form>


@endsection