


<!--Page that lists all course post pages--> 
@extends('layouts.app')

@section('content')
 
 <style>
   html, body {
  width: auto !important;
  overflow-x: hidden !important;
}
 </style>
  <body style="background-color: white;">
  <div class='welcome'>
    <h1 class='welcome'>Courses</h1> 
    </div>
    <div class="suhh-dude" style="background-color:white; border-radius:5px 5px 5px 5px; margin:40px;">
    <div class="course-container" style="">
    <table class="table table-striped table-responsive">
  <thead>
    <tr>
      
      <th>Teacher Last Name</th>
      <th>Teacher First Name</th>
      <th>Course</th>
     
    </tr>
    </thead>
    <!--Function to display all departments-->
  <tbody>
    <?php
    foreach ($courselist as $thing) {
      ?>
      <tr>
        <td><a href='example?blog_id=<?php echo $thing->id; ?>'><?php echo $thing->Last; ?></a></td>
        <td><?php echo $thing->First; ?></td>
        <td><?php echo $thing->Name; ?></td>
        
      </tr>
    </tbody>
    <?php }?>
  
</div>
      
    </div>
    
@endsection