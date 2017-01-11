<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\task;
use App\course;
use App\Department;
use App\post;
use App\todolist;

class StaticPagesController extends Controller

{
  public function welcome()
  {
    return view('welcome');
  }
  
  public function courseList(Request $request)
  {
    
    return view('courselist',['courselist'=>course::where('department_id',$request->input('dep_id'))->get()]);
  }
  
   public function departmentList()
{
    return view('departments',['departmentlist'=>Department::all()]);
  }
  
  public function calendar()
  {
    return view('calendar');
  }
    public function about()
  {
    return view('about');
  }
   public function report_problem()
  {
    return view('report_problem');
  }
  public function homee()
  {
    return view('homee');
  }
  public function example(Request $request)
  {
    $blog_id = $request->input('blog_id');
    return view('example',['posts'=>post::where('blog_id', $blog_id)->get()],['todolist'=>todolist::all()]);
  }
  
  public function examplepost(Request $request)
  {
    if ($request->has('poster')){
      post::create(array(
        'name'=>$request->input('name'),
        'blog_id'=>$request->input('blog_id'),
        'message'=>$request->input('message'),
      ));
    }
    if ($request->has('submit_button_name')){
      todolist::create(array(
        'name'=>$request->input('name'),
        'comment'=>$request->input('comment'),
        'post_id'=>$request->input('post_id')
      ));
    }
     return redirect()->action('StaticPagesController@example', ['blog_id' => $request->input('blog_id')]);
  }
  
  
  public function todolist()
  {
    return view('todolist',['tasks'=>task::all()]);
  }
     
 public function todolistpost(Request $request)
  {
    task::create(array(
        'name'=>$request->input('task'),
        'user_id'=>$request->input('user_id')
      ));
    
     return redirect()->action('StaticPagesController@todolist');
  }
}
