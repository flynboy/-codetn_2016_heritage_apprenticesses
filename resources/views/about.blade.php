

<!--About us page-->
@extends('layouts.app')

@section('content')
<style>
html, body {
  width: auto !important;
  overflow-x: hidden !important;
}    
</style>
<body>
    
    <div class="row-md-4" style="background-color:white;">
  <div class="container">
    <div class="row">
  <!--Left border-->
      <div class="col-md-2" style="background-color: #a7e8c6; height:100%; position:fixed; top:0; left:0; margin:0 0 0 0;"></div>
  <!--Content DIV-->
      <div class="col-md-8 col-offset-8" style="background-color:white; margin-left:16%; text-align: center;" >
        <h1 class="welcome" style="border-bottom: 1px solid #a7e8c6;">About Us</h1>
            <h3 class="welcome">Our Team:</h2>
            <!--Team photo-->
                <img src="{{ secure_asset('images/finalgroupphoto.jpg') }}"height=10% width=70% style="padding-bottom: 2.75%; padding-top: 1.25%;"/>
                <br>
            <!--Team info-->    
                <p>The Heritage High School Apprenticesses coding team. We are a part of the Heritage High School Code Club. We are an all-girl coding team. Originally, there was two teams, the Apprientices and the Sourcerors. We had too many people to only have two teams, so we split into Sourcerors (the senior team), the Apprientices (orignially an all-guy team), and the Apprenticesses (our all-girl team).</p>
                <br/><h3 class="welcome" style="border-bottom: 1px solid #a7e8c6;">  Members:</h3>
                <ul style="list-style:none;">
                    <li>Megan Brewer, design.</li>
                    <li>Athena Guinn, coder.</li>
                    <li>Katrina Kassib, database.</li>
                    <li>Cheyane Knipfer, design.</li>
                    <li>Sarah Miller, coder.</li>
                    <li>Dakota Welch, database.</li>
                </ul>

      </div>
  <!--Right border?-->
      <div class="col-md-2" style="background-color: #a7e8c6; height:100%; position:fixed; top:0; right:0; margin:0 0 0 0;"></div>
    </div>
  </div>
</div>
    </div>
    </div>
</div>
</div>
</body>
@endsection

