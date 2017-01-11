<!--Todolist page-->
@extends('layouts.app')

@section('content')

<style>
 body{
    background-color:white;
}
.todolist{
    background-color:#FFF;
    padding:20px 20px 10px 20px;
    margin-top:30px;
}

.todolist h1{
    margin:0;
    padding-bottom:20px;
    text-align:center;
}

.form-control{
    border-radius:0;
}

li.ui-state-default{
    background:#fff;
    border:none;
    border-bottom:1px solid #ddd;
}

html, body {
  width: auto !important;
  overflow-x: hidden !important;
}

li.ui-state-default:last-child{
    border-bottom:none;
}

.todo-footer{
    background-color:white;
    margin:0 -20px -10px -20px;
    padding: 10px 20px;
}

#done-items li{
    padding:10px 0;
    border-bottom:1px solid #ddd;
    text-decoration:line-through;
}

#done-items li:last-child{
    border-bottom:none;
}

#checkAll{
    margin-top:10px;
}

  .btn-primary {
    background-color: #dbbd9b;
    border-color: #dbbd9b;
  }
  
  .btn-primary:focus, .btn-primary.focus {
    color: #fff;
    background-color: #dbbd9b;
    border-color: #dbbd9b; }
  .btn-primary:hover {
    color: #fff;
    background-color: #ccb192;/*MAKE SLIGHTLY DARKER FOR HOVER EFFECT*/
    border-color: #ccb192; }/*MAKE SLIGHTLY DARKER FOR HOVER EFFECT*/
  .btn-primary:active, .btn-primary.active,
  .open > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #dbbd9b;
    border-color: #dbbd9b; }
   .btn-primary:active:focus{
       color: #fff;
    background-color: #dbbd9b;
    border-color: #dbbd9b;  
   }
</style>
<body>
<div class="container">
  <div class="row">
   <div class="col-md-2 bod" style="z-index: 0; background-color: #f7d5af; height:100%; position:fixed; top:0; left:0; margin:0 0 0 0;"></div>
   <div class="col-md-8">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <div class="container">
        <div class="row" style="width:70%; margin:auto;">
            <div class="col-md-12">
                <div class="todolist not-done" style="">
                 <h1>To-do:</h1>
                 <form method='post'  id="myform2">
                    <input type="text" class="form-control add-todo" placeholder="Add List Item" name="task">
                    <input type="hidden" name="user_id" value="<?php echo Auth::user()->id; ?>"/>
                    <button id="" class="btn btn-primary"  type="submit" style="margin-top: 5px;">Add</button>
                </form>
                   <br>
                   <br>
                    <?php 
                    foreach ($tasks as $thing){
                        if ($thing->user_id==Auth::user()->id){
                    ?>
                    <input type="checkbox" value="" /><?php echo $thing->name; ?> <br>
                    <?php }}23?>
    </div>                                                                 
</div>
<div class="col-md-2 bod" style="z-index: 0; background-color:#f7d5af; height:100%; position:fixed; top:0; right:0; margin:0 0 0 0;"></div>
  </div>
 </div>
</div>

<style>
 
</style>

  </body>
  <script type="text/javascript">
$("#sub").click(function(){

    $.post($("#myform2").attr("action"), $("#myform2:input").serializeArray(), function(info){$("#result").html(info);});
    });

$("#myform2").submit(function(){
    return false;
    });
</script>
@endsection