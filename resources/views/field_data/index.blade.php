@extends('layouts.app')
@section('content')

<style>
    .push-top {
        margin-top: 50px;
    }

    .btn-group .btn {
        width: 100px;
        padding: 17px;
        line-height: 0;
        max-height: 0;
        margin-right: 4px !important;
        border-radius: 4px !important;
    }
</style>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" class="align-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h2>Field Data</h2>
            </a>
            <form class="d-flex" action="{{route('field_data.index')}}" method="GET">
                <input name="search" class="form-control me-2 mr-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="submit">Search</button>
                <a class="ml-2 btn btn-primary" href="{{route('field_data.index')}}">Reset</a>

            </form>

            <a class="btn btn-sm btn-primary" href=" {{route('field_data.create')}} " role="button">Add new FieldData</a>

    </nav>
</div>

<!-- <h2>Field Data</h2> -->

<div class="push-top">

    <table class="table">
        <thead>
            <tr class="table-warning">
                <td>Attribute Name</td>
                <td>Database Name</td>
                <td>Is FromData</td>
                <td>Input Type</td>
                <td>Options</td>

                <td class="text-center">Action</td>
            </tr>
        </thead>
        <tbody>

            @foreach($fieldData as $data)
            <tr>
                <td>{{$data->attribute_name}}</td>
                <td>{{$data->database_name}}</td>
                <td>{{$data->is_fromdata}}</td>
                <td>{{$data->input_type}}</td>
                <td>{{$data->options}}</td>

                <td style="width:200px">
                    <div class="btn-group" role="group" aria-label="Basic example">

                        <a class="btn btn-sm btn-success" href="{{route('field_data.edit', $data->id)}}" role="button">Edit</a>

                        <form action="{{route('field_data.destroy', $data->id)}}" onclick="return confirm('Are you sure?')" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                        </form>

                        <a class="btn btn-sm btn-secondary" href="{{route('field_data.show', $data->id)}}" role="button" style="width: 120px">viewdetails</a>


                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{ $fieldData->render()}}

</div>

@endsection