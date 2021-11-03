@extends('layouts.app')

@section('content')

<h1>View Details</h1>

<h2>name:{{$coverpage->name}}</h2>
<h2>title:{{$coverpage->title}}</h2>
<h2>required questions:{{$coverpage->required_questions}}</h2>

<p>Coverpage Preview</p>

<iframe src="{{asset('/storage/'.$coverpage->file)}}" width="100%" height="1000" title="W3Schools Free Online Web Tutorials">
</iframe>

@endsection