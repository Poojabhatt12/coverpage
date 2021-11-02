@extends('layouts.app')

<style>
    .push-top {
        margin-top: 50px;
    }
</style>

@section('content')

<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" class="align-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h2>CoverPage</h2>
            </a>

       
     <a class="btn btn-sm btn-primary" href=" {{route('coverpage.create')}} " role="button">Add new Coverpage</a>

    </nav>
</div>





<div class="push-top">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br />
    @endif


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
            @foreach($coverPagesRam as $coverPage)
            <tr>
                <td>{{$coverPage->name}}</td>
                <td>{{$coverPage->title}}</td>
                <td>{{$coverPage->required_questions}}</td>

                <td style="width:200px">
                    <div class="btn-group" role="group" aria-label="Basic example">



                        <a class="btn btn-sm btn-success" href=" {{route('coverpage.edit', $coverPage->id)}} " role="button">Edit</a>


                        <form action="{{route('coverpage.destroy',$coverPage->id) }}" onclick="return confirm('Are you sure?')" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')

                            <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                        </form>
                        <a class="btn btn-sm btn-secondary" href=" {{route('coverpage.show', $coverPage->id)}} " role="button" style="width: 120px">view details</a>



                    </div>


                </td>

            </tr>
            @endforeach
        </tbody>

        
    </table>
</div>
 
@endsection

<style scoped>
   .btn-group .btn {
    width: 100px;
    padding: 17px;
    line-height: 0;
    max-height: 0;
    margin-right: 4px!important;
    border-radius: 4px!important;
}
</style>