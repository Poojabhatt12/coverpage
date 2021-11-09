@extends('layouts.app')

@section('content')

<h1>View Details</h1>

<h5>Name:</h5>
{{$coverpage->name}}

<h5>Title:</h5>
{{$coverpage->title}}

<h5>Required questions:</h5>
{{$coverpage->required_questions}}

<h3>Coverpage Preview</h3>

<iframe src="{{asset('/storage/'.$coverpage->file)}}" width="100%" height="1000" title="W3Schools Free Online Web Tutorials">
</iframe>

@endsection