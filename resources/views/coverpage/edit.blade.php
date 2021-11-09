 @extends('layouts.app')

 @section('content')

 <h1>Edit</h1>


 <form action="{{route('coverpage.update',$coverpage->id)}}" method='POST' enctype='multipart/form-data'>
     @csrf
     @method('PUT')
     <input class="form-control" type="text" name='name' placeholder='name' value="{{$coverpage->name}}"><br></br>

     <input class="form-control" type="text" name='title' placeholder='title' value="{{$coverpage->title}}"><br></br>

     <input class="form-control" type="number" name='required_questions' placeholder='required_questions' value="{{$coverpage->required_questions}}"><br></br>

     <input class="form-control" type="file" name='file' placeholder='file' value="{{$coverpage->file}}">

<br>
     <input type="submit" class="btn btn-success" value="Save">

 </form>



 @endsection