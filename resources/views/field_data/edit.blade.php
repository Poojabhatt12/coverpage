@extends('layouts.app')

@section('content')

<h1>Edit</h1>



<form action="{{route('field_data.update',$fieldData->id)}}" method='POST' enctype='multipart/form-data'>
    @csrf
    @method('PUT')



    <div class="form-group">
        <div class="row form-group">
            <div class="col-2 pt-2">
                <label for="name">Attribute Name:</label>
            </div>
            <div class="col-10">
                <input required class="form-control" type="text" name="attribute_name" placeholder='Attribute Name' value="{{$fieldData->attribute_name}}">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-2 pt-2">
                <label for="name">Database Name:</label>
            </div>
            <div class="col-10">
                <input required required class="form-control" type="text" name="database_name" placeholder="Database Name" value="{{$fieldData->database_name}}">
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
                <input required class="form-control" type="text" name="input_type" placeholder="Input Type" value="{{$fieldData->input_type}}">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-2 pt-2">
                <label for="name">Options:</label>
            </div>
            <div class="col-10">
                <input required class="form-control" type="text" name="options" placeholder="options" value="{{$fieldData->options}}">
            </div>
        </div>
        <div class="col-2">
            <input type="submit" class="btn btn-success" value="Save">
        </div>
    </div>



</form>

@endsection