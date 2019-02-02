@extends('layout')

@section('content')
    
     <div class="container">
         
        <div class="row">
       
           <div class="col-lg-12">
              
               <form action="{{route('todo.save',['id'=>$up_todo->id])}}" method="post">
                   
                    {{csrf_field()}}
                    <br>
                    <input type="text" class="form-control input-lg" value="{{$up_todo->todo}}" name="todo">
                    <br>
                   <button type="submit" value="Update" class="btn btn-large btn-primary" style="font-weight: bold;">Update</button>
               </form>
               
            </div>
            
        </div>
        
      </div> 
@stop
