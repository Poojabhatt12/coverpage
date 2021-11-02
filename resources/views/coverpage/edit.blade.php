 @extends('layouts.app')

 @section('content')

 <h1>Edit</h1>


 <form action="{{route('coverpage.update',$coverpage->id)}}" method='POST' enctype='multipart/form-data'>
     @csrf
     @method('PUT')
     <input type="text" name='name' placeholder='name' value="{{$coverpage->name}}"><br></br>

     <input type="text" name='title' placeholder='title' value="{{$coverpage->title}}"><br></br>

     <input type="number" name='required_questions' placeholder='required_questions' value="{{$coverpage->required_questions}}"><br></br>

     <input type="file" name='file' placeholder='file' value="{{$coverpage->file}}">


     <input type="submit" class="btn btn-success" value="Save">

 </form>



 @endsection