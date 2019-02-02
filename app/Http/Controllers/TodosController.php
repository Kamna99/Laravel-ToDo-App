<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\todo;

class TodosController extends Controller
{
    public function index(){ 
        
        $data=todo::all();
        
        return view('todos')->with('task',$data);
    }
    
    public function store(Request $request){
        
        //dd($request->all());
        
        $todo = new todo;
        
        $todo->todo=$request->todo;
        
        $todo->save();
        
        Session::flash('success','Your Todo has been created successfully');
        
        return redirect()->back();
    }
    
    public function delete($id){
        
        //dd($id);
        
        $todo=todo::find($id);
        
        $todo->delete();
        
        Session::flash('success','Your Todo has been deleted successfully');
        
        return redirect()->back();
    }
    
      public function update($id){
        
        //dd($id);
        
        $todo=todo::find($id);
          
        return view('update_todo')->with('up_todo',$todo);
    }
    
    public function save(Request $request,$id){
        
       // dd($request->all());
        
        $todo=todo::find($id);
        
        $todo->todo=$request->todo;
        
        $todo->save();
        
        Session::flash('success','Your Todo has been updated successfully');
        
        return redirect()->route('todos');
     
    }
    
    public function completed($id){
        
            
        $todo=todo::find($id);
        
        $todo->completed=1;
        
        $todo->save();
        
        Session::flash('success','Your Todo has been " Marked As Conpleted " successfully');
        
        return redirect()->route('todos');
     
        
        
        
    }
}
