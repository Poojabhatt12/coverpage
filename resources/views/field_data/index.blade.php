@extends('layouts.app')
@section('content')

<h2>Field Data</h2>

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