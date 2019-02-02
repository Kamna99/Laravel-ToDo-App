@extends('layout')

@section('content')
    
     <div class="container">
         
        <div class="row">
       
           <div class="col-lg-6 col-lg-offset-3">
           
               <form action="create/todo" method="post" >
                   
                    {{csrf_field()}}
                    
                    <input type="text" class="form-control input-lg" placeholder="Create a new Todo" name="todo" >
                    
                    
               </form>
               
              
            </div>
            
        </div>
         
        <br>
        
        @foreach($task as $t)
        
             <div class="row" style="border:1px solid white;padding:10px;">

                       <div class="col-lg-7" >

                              {{$t->todo}}

                        </div>

                        <div class="col-lg-5" >

                             <a href="{{route('todo.delete',['id'=>$t->id])}}" class="btn btn-danger" style="font-weight: bold;">Delete</a>
                             
                             <a href="{{route('todo.update',['id'=>$t->id])}}" class="btn btn-info" style="font-weight: bold;">Update</a>
                             
                             @if(!$t->completed)
                             
                             <a href="{{route('todo.completed',['id'=>$t->id])}}" class="btn btn-success" style="font-weight: bold;">Mark As Completed</a>
                             
                    
                             
                             @else
                             
                                  <a href="#" class="btn btn-warning" style="font-weight: bold;">Yayy,It's Completed</a>
                             
                             @endif
                             
  
                       </div>

            </div>   
         
         @endforeach 
         
      </div> 
@stop
