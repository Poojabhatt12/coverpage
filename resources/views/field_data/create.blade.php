@extends('layouts.app')

@section('content')

<h2>Field Data</h2>

<form action="/field_data" method='POST'>
    @csrf



    <label for="name">attribute Name:</label><br>
    <input required class="form-control" type="text" name="attribute_name" placeholder='attribute_name'><br><br>

    <label for="name">Database Name:</label><br>
    <input required required class="form-control" type="text" name="database_name" placeholder="database_name"><br><br>

    <label for="name">Isfrom Data:</label><br>
    <input required class="" type="checkbox" name="is_fromdata" placeholder="is_fromdata" value="1"><br><br>

    <label for="name">Input Type:</label><br>
    <input required class="form-control" type="text" name="input_type" placeholder="input_type"><br><br>

    <label for="name">Options:</label><br>
    <input required class="form-control" type="text" name="options" placeholder="options"><br><br> 


    <input type="submit" class="btn btn-success" value="Save">
    </div>

</form>


@endsection