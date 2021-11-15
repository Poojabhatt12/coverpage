@extends('layouts.app')

@section('content')

<h1>View Details</h1>

<label for="name">Attribute Name:</label>
{{$fieldData->attribute_name}}<br>


<label for="name">Database Name:</label>
{{$fieldData->database_name}}<br>

<label for="name">Is FromData:</label>
{{$fieldData->is_fromdata}}<br>
    


<label for="name">Input type:</label>
{{$fieldData->input_type}}<br>

<label for="name">Options:</label>
{{$fieldData->options}}

@endsection