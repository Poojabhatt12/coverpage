 @extends('layouts.app')

 @section('content')

 <h1>Edit</h1>


 <form action="{{route('coverpage.update',$coverpage->id)}}" method='POST' enctype='multipart/form-data'>
     @csrf
     @method('PUT')

     <div class="form-group">
         <div class="row form-group">
             <div class="col-2 pt-2">
                 <label for="name">Name:</label>
             </div>
             <div class="col-10">
                 <input class="form-control" type="text" name='name' placeholder='name' value="{{$coverpage->name}}"><br></br>

             </div>
         </div>

         <div class="row form-group">
             <div class="col-2 pt-2">

                 <label for="title">Title:</label>
             </div>
             <div class="col-10">
                 <input class="form-control" type="text" name='title' placeholder='title' value="{{$coverpage->title}}">
             </div>
         </div>

         <div class="row form-group">
             <div class="col-2 pt-2">
                 <label for="required_questions">RequiredQuestions:</label>
             </div>
             <div class="col-10">

                 <input class="form-control" type="number" name='required_questions' placeholder='required_questions' value="{{$coverpage->required_questions}}"><br></br>

             </div>
         </div>

         <div class="row form-group">
             <div class="col-2 pt-2">
                 <label for="file">File:</label>
             </div>
             <div class="col-10">
                 <input class="form-control" type="file" name='file' placeholder='file' value="{{$coverpage->file}}">


             </div>
         </div>

         <div class="col-2">
             <input type="submit" class="btn btn-success" value="Save">
         </div>
 </form>

 @endsection