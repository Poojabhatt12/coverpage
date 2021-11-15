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

    <div class="form-group">
        <div class="row form-group">
            <div class="col-2 pt-2">
                <label for="name">Name:</label>
            </div>
            <div class="col-10">
                <input required class="form-control" type="text" name="name" placeholder='Name'><br><br>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-2 pt-2">

                <label for="title">Title:</label>
            </div>
            <div class="col-10">
                <input required class="form-control" type="text" name="title" placeholder="title"><br><br>

            </div>
        </div>

        <div class="row form-group">
            <div class="col-2 pt-2">
                <label for="required_questions">RequiredQuestions:</label>
            </div>
            <div class="col-10">
                <input required class="form-control" type="text" name="required_questions" placeholder="required_questions">

            </div>
        </div>

        <div class="row form-group">
            <div class="col-2 pt-2">
                <label for="file">File:</label>
            </div>
            <div class="col-10">

                <input required class="form-control" type="file" name="file" placeholder="file"><br><br>

            </div>
        </div>

        <div class="col-2">
            <input type="submit" class="btn btn-success" value="Save">
        </div>

</form>


@endsection