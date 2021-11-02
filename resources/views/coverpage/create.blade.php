@extends('layouts.app')

@section('content')

<style>
    .push-top {
        margin-top: 50px;
    }
</style>

<h2>Cover Page</h2>
    <form action="/coverpage" method='POST' enctype='multipart/form-data'>
        @csrf

        <input type="text" name='name' placeholder='name'>

        <input type="text" name='title' placeholder='title'>

        <input type="number" name='required_questions' placeholder='required_questions'>

        <input type="file" name='file' placeholder='file'>

       
        <input type="submit" class="btn btn-success" value="Save">

</form>

@endsection