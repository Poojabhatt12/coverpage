@extends('layouts.app')

<style>
    .push-top {
        margin-top: 50px;
    }

    .btn-group .btn {
        width: 48px;
        padding: 0;
        margin-right: 4px !important;
        border-radius: 4px !important;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 48px;
    }
</style>

@section('content')

<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" class="align-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h4>CoverPage</h4>
            </a>
            <form class="d-flex mt-3" action="{{route('coverpage.index')}}" method="GET">
                <input name="search" class="form-control me-2 mr-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="submit"> <i class="fa fa-search"></i> </button>
                <a class="ml-2 btn btn-secondary" href="{{route('coverpage.index')}}"> Reset </a>

            </form>


            <a class="btn btn-sm btn-primary" href=" {{route('coverpage.create')}} " role="button"> <i class="fa fa-plus"></i> &nbsp; Add new Coverpage</a>

    </nav>
</div>





<div class="push-top">



    <table class="table">
        <thead>
            <tr class="table-warning">
                <td>Name</td>
                <td width="300">Title</td>
                <td>Required Questions</td>

                <td class="text-center">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($coverPages as $coverPage)
            <tr>
                <td>{{$coverPage->name}}</td>
                <td>{{$coverPage->title}}</td>
                <td>{{$coverPage->required_questions}}</td>



                <td style="width:200px">
                    <div class="btn-group" role="group" aria-label="Basic example">



                        <a class="btn btn-sm btn-success" href=" {{route('coverpage.edit', $coverPage->id)}} " role="button"> <i class="fa fa-pencil"></i></a>


                        <form action="{{route('coverpage.destroy',$coverPage->id) }}" onclick="return confirm('Are you sure?')" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                        <a class="btn btn-sm btn-secondary" href=" {{route('coverpage.show', $coverPage->id)}} " role="button"><i class="fa fa-eye" aria-hidden="true"></i></a>



                    </div>


                </td>

            </tr>
            @endforeach
        </tbody>


    </table>
    {{ $coverPages->render()}}
</div>

@endsection