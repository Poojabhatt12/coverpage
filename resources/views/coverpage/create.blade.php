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


    <label for="name">Name:</label><br>
    <input class="form-control" type="text" name="name" placeholder='name'><br><br>

    <label for="title">Title:</label><br>
    <input class="form-control" type="text" name="title" placeholder="title"><br><br>

    <label for="required_questions">RequiredQuestions:</label><br>
    <input class="form-control" type="text" name="required_questions" placeholder="required_questions"><br><br>

    <label for="file">File:</label><br>
    <input class="form-control" type="file" name="file" placeholder="file"><br><br>

    <input type="submit" class="btn btn-success" value="Save">


</form>


@endsection