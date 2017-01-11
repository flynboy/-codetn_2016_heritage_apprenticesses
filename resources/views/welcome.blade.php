<!--Landing page-->
@extends('layouts.landing')

@section('content')

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Syncopate" />
<style>
  h2 {
	font-weight: 300;
	color: white;
	font-size: 55px;
	text-transform: uppercase;
	text-align: center;
	margin-bottom: 20px;
 }
 a {
	text-decoration: none;
	color: #444;
}

a:hover {
	color: #02b8dd;
}
strong {
	font-weight: bold;
}
body {
	background-image: url(/images/wavewave4.jpg);;
	background-size: 100%;
	background-repeat: no-repeat;
	min-height: 600%; 
	max-height: 2000%;
	min-width: 100%;
	max-width: 600%;
	background-color: #82d9b6;
}


.button-1 {
	display: block;
	text-align: center;
	background: #444;
	border-radius: 3px;
	color: #fff;
	width: 180px;
	height: 50px;
	font-size: 23px;
	line-height: 50px;
	margin:auto;
	margin-top:0px;
	position:absolute;
	bottom:0;
	margin-left:auto;
	margin-right:auto;
	left:0;
	right:0;
	font-family: Arial;
}

.button-1:hover {
	background-color: rgba(0, 0, 0, 0.25);
	color: #fff;
	text-decoration: none;
	font-weight: bold;
}
h3 {
	font-size: 30px;
	color: #444;
	font-weight: bold;
	text-transform: uppercase;
	text-align: center;
	margin-bottom: 20px}
 .primary-content {
	
	padding: 0px 0;
	text-align: center;
	border-radius: 15px;
	position: relative;
/*	margin-top:450px;*/
h4 {
	font-size: 30px;
	color: #444;
	font-weight: bold;
	text-transform: uppercase;
	text-align: center;
	margin-bottom: 20px}
 .primary-content {
	padding: 30px 0;
	text-align: center;
}
.headingthree {
	display: block;
	margin: 0 auto 20px auto;
	width: 400px;
	border-bottom: 3px solid #ffffff;
	padding: 0 0 20px 0;
}

</style>
<body style="background-color: #a7e8c6f;">
	<div class="container">
 		<!--logo in top left-->
		<div class="row" style="margin-bottom: 40%;">
			<div class="col-md-12" style="">
				<img style="style= position:relative; height: 100px;" alt="Hooked Logo" src="{{ secure_asset('images/THEACTUALFINALLOGO.png') }}">
			</div>
		</div>
		<!--Login button.-->
	 	@if (!Auth::check())
		<div class="row" style="margin-bottom: 0px;">
	<div class="col-md-12">
		<div style='margin:auto;'>
    		<a style=" style: none; color: #000000; background-color: rgba(0, 0, 0, 0.125); border:1px solid black; border-radius:6px;" href="{{ secure_url('/login') }}" id = "loginbutton" class="button-1"><i class="fa fa-btn fa-sign-in"></i> Login/Register</a>
		</div>
	</div>
</div>
    		@endif
		</br>
		</br>
		</br>
		<!--Info at bottom-->
		<div class="row" style="">
			<div class="col-md-12" style="margrin-bottom: 0px;">
				<div id="" class="col-md-12 primary-content">
					<p><b><h3 class="headingthree">Hooked</h3><h4> Here to keep you from sinking.</h4></b></p>
					<p style="text-align: center; padding: 20px; font-family:font-family: Syncopate;"><b>Our application is about creating a stronger student community through peer assistance. Students can ask questions and get a response from their peers that take the same course.  This way, students will begin to understand the lessons and improve their grades. We want to make a difference in the work ethic and grades of students by helping them understand the 'language' of the teachers. In understanding that language, we hope that they understand that they can do anything if they try hard enough. For us, this program isn't just a pile of code; it's a hook to catch people and keep them from sinking, and the fishing line to a brighter tomorrow.</b></p>
    			</div>
		    </div>
		</div>
		
    		
    </div>
</body>

    
@endsection