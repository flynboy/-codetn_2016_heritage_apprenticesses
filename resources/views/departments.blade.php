<!--Page that lists all of the departments classes are located in-->
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
    <h1 class='welcome'>Departments</h1> 
    </div>
    <div class="course-container" style="padding-top:20px;">
    <table class="table table-striped table-responsive">
  <thead class="thead-inverse">
    <tr>
      <th>Name</th>
     
    </tr>
    </thead>
  <tbody>
    <?php
    foreach ($departmentlist as $department) {
      ?>
      <tr>
        <td><a href='courselist?dep_id=<?php echo $department->id; ?>'><?php echo $department->name; ?></a></td>
        
      </tr>
    <?php     } ?>
    </tbody>
</table>
</div>
      
    </div>
    
@endsection