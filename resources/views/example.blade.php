<!--Post pages-->
@extends('layouts.app')

@section('content')
<style>
   
   .write_post {
    width: 700px; 
    padding: 25px 50px 25px 50px; 
    border-radius: 4px; 
    background-color: #bbaaa0; 
    border: 1px solid #aaa9a9;
    display: block; 
    display: inline-block; 
    text-align: center;
    margin: 25px;
    }
    html, body {
  width: auto !important;
  overflow-x: hidden !important;
}    
    .post {
    width: 700px; 
    padding: 25px 50px 25px 50px; 
    border-radius: 4px; 
    background-color: #e3e4e6; 
    border: none;
    display: block; 
    display: inline-block; 
    text-align: center;
    }
    .comment {
    width: 700px; 
    padding: 25px 50px 25px 50px; 
    border-radius: 4px; 
    background-color:#bbaaa0 ; 
    border: 1px solid #aaa9a9;
    display: block; 
    display: inline-block; 
    text-align: center;
    }
    .post_header {
    text-align: left;
    font-size: 2em;
    font-weight: bold;
    color: #444444;
    text-align:center; 
    border-bottom: 1px solid #595959;
}
.comment_header {
    text-align: left;
    font-size: 1.5em;
    font-weight: bold;
    color: #444444;
    text-align: center;
    border-bottom: 1px solid #595959;
}
.basic_text {
    color: #444444;
    text-align:left;
    font-size: 1.25em;
}
</style>
<script type="text/javascript" src="">
    
</script>
   <body>
       
<div class="welcome">
    <div class="row-md-4" style="background-color:white;">
  <div class="container">
      <div class="row">
          <!--Border-->
        <div class="col-md-2" style="z-index: 0; background-color: #a7e8c6; height:100%; position:fixed; top:0; left:0; margin:0 0 0 0;"></div>
    <div style="z-index: -50; margin-left: 0px; padding-left: 0px;">
        
        <br>
        <!--Form for new post-->
            <div style="margin: 12.5px;">
            <div class="post" style="margin:1px;">
                <div style="background-color: white;  padding: 3px; margin: 3px; text-align: left;">
                    <h4 class="post_header" style="">Have a question? Ask it!</h4>
                    <form id="myform" method='post'>
                    <input type="hidden" name="blog_id" value="<?php echo $_GET['blog_id']; ?>">
                    <input type="hidden"  name='name' value="<?php echo Auth::user()->name; ?>" >
                    <p>Question:</p><textarea type="text" value="message" name='message' placeholder="" rows=5 cols=69 style="border-color: #595959;"></textarea>
                </div>
                    <button type="submit" class="btn btn-info" style="text-align: right; margin-top: 3px;" name="poster" value='post'> Post</button>
                    </form>
            </div><br>
            </div>
            <!--Posts format-->
             <div style="margin: 12.5px;">                  
             <?php
                foreach ($posts as $post) {
              ?> 
            <div class="post" style="margin:1px;">
                <div style="background-color: white;  padding: 3px; margin: 3px;">
                    <h4 class="post_header" style=""><?php echo $post->name; ?> at <?php 
                    $date = new DateTime($post->created_at);
                    date_timezone_set($date, timezone_open('America/New_York'));

                    echo '<br />';
                    echo $date->format('D, d M Y H:i:s');
                     ?> asked:</h4><br>
                    <blockquote><?php echo $post->message; ?></blockquote>
                </div>
                <!--COMMENTS format -->
                <?php foreach ($todolist as $comment) { 
                if ($comment->post_id==$post->id){
                
                ?>
            
                <div style="background-color: white; padding: 3px; margin: 3px;">
                    <h6 class="comment_header"><?php echo $comment->name; ?> at <?php 
                $date = new DateTime($post->created_at);
                date_timezone_set($date, timezone_open('America/New_York'));

                echo '<br />';
                echo $date->format('D, d M Y H:i:s');
                 ?> replied:</h6>
                    <blockquote><?php echo $comment->comment; ?></blockquote>
                </div>
                <?php } }?>
                <!--Comment form-->
                <form id="myform_2" method='post'>
                    <input type="hidden"  name='name' value="<?php echo Auth::user()->name; ?>" >
                    <input type="hidden" name="post_id" value="<?php echo $post->id; ?>"/>
                    <p>Comment:</p><textarea type="text" value="message" name='comment' placeholder="" rows=5 cols=69 style="border-color: #595959;"></textarea>
                    <br><button type="submit" class="btn btn-info" style="text-align: right; margin-top: 3px;" name="submit_button_name" value="comment"> Comment</button>
                </form>
            </div><br>
            <?php } ?>
            </div>
        </div>
        <!--border--->
        <div class="col-md-2" style="background-color: #a7e8c6; height:100%; position:fixed; top:0; right:0; margin:0 0 0 0;"></div>
        </div>
    </div>
    </div>
</div>

</body>
<script>
    ("#sub").click(function(){

    .post(("#myform").attr("action"), ("#myform:input").serializeArray(), function(info){("#result").html(info);});
    });

("#myform").submit(function(){
    return false;
    });
    
    ("#sub").click(function(){

    .post(("#myform_2").attr("action"), ("#myform_2:input").serializeArray(), function(info){("#result").html(info);});
    });

("#myform_2").submit(function(){
    return false;
    });
</script>
@endsection