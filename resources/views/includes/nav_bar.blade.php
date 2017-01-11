
<style>
    .fa-anchor {
        font-size: 2em;
    }
</style>
<nav class="navbar navbar-inverse"  style="z-index:5; background-color: #c5c5c5; border-color: #e7e7e7;"> 
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="background-color: #9d9d9d; border-color: #9d9d9d;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <div style="position: relative; left: 25%;">
        <ul class="nav navbar-nav">
          <li><a href="/departments" style="">Classes</a></li>
          <li style="font-family:"><a href="/todolist">To-do</a></li>
          <li style="font-family:"><a href="/calendar">Calendar</a></li>
          <li><a href="/homee"><i class="fa fa-anchor"></i></a></li>
          <!--<li><a class="navbar-brand" href="{{ secure_url('/homee') }}" data-toggle="tooltip" title="Home"><img class=".img-fluid hide_img" style="height:75px; width:75px;"  alt="Hooked Logo" src="{{ secure_asset('images/THEACTUALFINALLOGO.png') }}"></a></li>-->
           <li style=""><a href="/report_problem">Privacy Policy</a></li>
           <li style=""><a href="/about">About Us</a></li>
           @if (Auth::check())
           <li><a href="/logout">Log Out</a></li>
           @else
           <li><a href="/login">Log In</a></li>
           @endif
          </ul>
        </div>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>

<!--<style>
  @media screen and (min-width:768px){
    .navbar-brand-centered {
        position: absolute;
        left: 50%;
        display: block;
        width: 160px;
        text-align: center;
        background-color: #eee;
        z-index:30;
    }
    .navbar>.container .navbar-brand-centered, 
    .navbar>.container-fluid .navbar-brand-centered {
        margin-left: -80px;
    }
}
</style>
        <nav class="navbar navbar-default" role="navigation" style="z-index:5;">
    	  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		  <!-- <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand navbar-brand-centered" href="{{ secure_url('/homee') }}">
		        <img class=".img-fluid" style="height:75px; width:75px;"  alt="Hooked Logo" src="{{ secure_asset('images/THEACTUALFINALLOGO.png') }}"></div>
		    </a>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		   <!-- <div class="collapse navbar-collapse" id="navbar-brand-centered">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Home</a></li>
		        <li><a href="#">Courses</a></li>
		        <li><a href="#">To-Do</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Calendar</a></li>
		        <li><a href="#">Contact Us</a></li>
		        <li><a href="#">Logout</a></li>		        
		      </ul>-->
		    <!--</div><!-- /.navbar-collapse -->
		  <!--</div><!-- /.container-fluid -->
		<!--</nav>-->
		
	<!--	<style>
		  .navbar-collapse .navbar-brand .white-circle {
  position: relative;
  z-index: 2;
   width: 161px;
    height: 161px;
}
.navbar-custom  {
    background-color: #D3D3D3;
    border-color: #E7E7E7;
}
.navbar-custom .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
color: #000;  /*Sets the text hover color on navbar*/
}

.navbar-custom .navbar-nav > .active > a, .navbar-default .navbar-nav > .active >   
 a:hover, .navbar-default .navbar-nav > .active > a:focus {
color: white; /*BACKGROUND color for active*/
background-color: #030033;
}

  .navbar-custom {
    background-color:#D3D3D3;
    border-color: #dbdaf2;
}
		</style>
		<nav class="navbar navbar-custom navbar-main" class="background-color:#DCDCDC" style="z-index:2;">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!--<div class="navbar-header">
        <a class="navbar-brand visible-xs" href="index.php">Logo</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="active"><a href="/homee">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="/departments">Courses</a></li>
            
        </ul>
        <div class="navbar-brand hidden-xs">
            <a class="white-circle text-center" href="index.php">
                <img class="logo .img-fluid" src="{{ secure_asset('images/THEACTUALFINALLOGO.png') }}" alt="Logo">
              
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            
            <li><a href="/report_problem">Contact us</a></li>
            <li><a href="/todolist">To-Do</a></li>
            <li><a href="book-now.php">Logout</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
    <!--</div><!-- /.container-fluid -->
<!--</nav>-->

