 <!--Home page-->

@extends('layouts.app')

@section('content')
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
header {
  background: 
    linear-gradient(
      rgba(0, 0, 0, 0.5),
      rgba(0, 0, 0, 0.5)
    ),
    url(/images/booksss.jpg);
  background-size: cover;
  height: 50vh; 
  font-family: "Economica";
  color: white;
  text-align: center;
  margin-top:-25px;
}
.title{
  padding-top:130px;
  margin-right:200px;
  padding-bottom:0;
  margin-left:250px;
}
.box1 {
  width: 95%; 
  margin: auto; 
  border: 1px solid #595959; 
  margin-top: 2%; 
  min-height:300px; 
  background-color:#e9d8d0;
}
 
.KillMePlZ {
  {
  font-size: 2em;
  line-height: 2em;
  height: 5em;
  display: table-cell;
  vertical-align: middle 
}
}
 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; 
      margin: auto;
      min-height:200px;
  }
.smallbox {
  border: 1px solid ; 
  border-radius: 15px; 
  background-color: white; 
  margin: 8px 8px 8px 8px; 
  min-width: 25%;
  min-height: 150px;
}
.largebox {
  border: 1px solid #595959; 
  border-radius: 15px; 
  background-color: white; 
  margin: 8px 8px 8px 5%; 
  min-width: 25%;
  min-height: 300px;
}
html, body {
  width: auto !important;
  overflow-x: hidden !important;
}  
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      
      margin-top: 0;
      font-size: 120px;
    text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }

  .carousel-control.left {
    background-image: none;
  }
.carousel-control.right {
    background-image: none;
  }
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }



    .featurette-divider {
      margin: 80px 0; 
    }
    .featurette {
      padding-top: 120px; 
      overflow: hidden; 
    }
    .featurette-image {
      margin-top: -120px; 
    }

    
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

   
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }


    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
   
      .carousel .item {
        
      }
      .carousel img {
        width: auto;
      
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }
      .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: px;
      }
     

      .marketing .span4 + .span4 {
        margin-top: 40px;
        }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }
 
    }
    button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
}


button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

div.panel {
    padding: 0 18px;
    background-color: white;
    display: none;
}

div.panel.show {
    display: block;
}
.leitbild-text{
  font-size: 2em;
  line-height: 2em;
  height: 5em;
  display: table-cell;
  vertical-align: middle 
}

.leitbild-bg{
  background-color: #ededed;
  margin: auto;
  padding:auto;
}
.carousel-caption {
      max-width: 550px;
      padding: 0 20px;
      margin:0 auto;
      margin-top: 200px;
      text-align:center;
  
}
  </style>
</head>
<body>
<!--Carousel-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators" style="position: absolute; top: 30px; left: 50%;dsfssaffadfadfy">
        <li data-target="#myCarousel" data-slide-to="0" class="active" style="background-color: rgba(0, 0, 0, 0.25); border-color: rgba(0, 0, 0, 0.25);"></li>
        <li data-target="#myCarousel" data-slide-to="1"  style="background-color: rgba(0, 0, 0, 0.25); border-color: rgba(0, 0, 0, 0.25);"></li>
        <li data-target="#myCarousel" data-slide-to="2"  style="background-color: rgba(0, 0, 0, 0.25); border-color: rgba(0, 0, 0, 0.25);"></li>
        <li data-target="#myCarousel" data-slide-to="3"  style="background-color: rgba(0, 0, 0, 0.25); border-color: rgba(0, 0, 0, 0.25);"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="{{ secure_asset('images/carouselpic5.jpg') }}" alt="First slide">
          <div class="container">
            <div class="carousel-caption" style=" border-style:solid; border-width:10px; background-color: rgba(0, 0, 0, 0.3); border-radius: 5px;">
           <h2 class="leitbild-text" style="text-align:center; font-family: Impact; font-size: 2.5em; padding-left: 25px;">Here to keep you from sinking.</h2>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="second-slide" src="{{ secure_asset('images/pictureee3.jpg') }}" alt="Second slide">
          <div style="text-align:center;"class="container">
            <div class="carousel-caption" style=" border-style:solid; border-width:10px; background-color: rgba(0, 0, 0, 0.3); border-radius: 5px;">
           <h2 class="leitbild-text" style="text-align:center; font-family: Impact; font-size: 2.5em;padding-left: 25px;">Here to keep you from sinking.</h2>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="{{ secure_asset('images/pictureee2.jpg') }}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption" style=" border-style:solid; border-width:10px; background-color: rgba(0, 0, 0, 0.3); border-radius: 5px;">
           <h2 class="leitbild-text" style="text-align:center; font-family: Impact; font-size: 2.5em;padding-left: 25px;">Here to keep you from sinking.</h2>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="{{ secure_asset('images/carousel10.jpg') }}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption" style=" border-style:solid; border-width:10px; background-color: rgba(0, 0, 0, 0.3); border-radius: 5px;">
           <h2 class="leitbild-text" style="text-align:center; font-family: Impact; font-size: 2.5em;padding-left: 25px;">Here to keep you from sinking.</h2>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<!--News and other information-->
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4" style=" ">
          
          <h2>Senior Information</h2>
          <ul>
            <li>
              Graduation date: May 15th
            </li>
            <li>
              Scholarship information available now in the counseling center
            </li>
             <li>
              TNPromise community service hours need to be completed by July 1, 2017
            </li>
             <li>
              Seniors can now pick up Senior Newsletter in the Counseling office
            </li>
          </ul>
            <div id="myyModal" class="modal">

  
</div>
        </div>
        <div class="col-lg-4">
          
          <h2>Important Dates</h2>
          <ul>

            <li>December 19-January 2
            Christmas Break</li>

            <li>Tuesday, January 3rd
            Administrative Day for Teachers
            No Students</li>

            <li>Wednesday, January 4th
            Students return to school</li>
            
            <li>Friday, January 6th- Tuesday, January 10th: No school--Snow days</li>
            
            <li>Monday, January 16th: Off school for Martin Luther King Jr. Day.</li>
           </ul>

        </div>
        <div class="col-lg-4">
          
          <h2>Counseling</h2>
          <ul>
            <li>
              Ashley Murphy, 9th Grade
              ashley.murphy@blountk12.org</li>

              <li>Hali Wright, Last Names A-G
              hali.wright@blountk12.org</li>

              <li>Kayla Walker (Interim), Last Names H-O
              kelizwalker813@gmail.com</li>

              <li>Isaac Bradshaw, Last Names P-Z
              isaac.bradshaw@blountk12.org
            </li>
          </ul>
<br>
        </div>
      </div>
    </div>
@endsection