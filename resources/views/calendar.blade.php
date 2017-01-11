<!--Calendar page-->
@extends('layouts.app')

@section('content')
<style>
html, body {
  width: auto !important;
  overflow-x: hidden !important;
}
.btn-primary {
    background-color: #9bdbba;
    border-color: #9bdbba;
  }
  .btn-primary:focus, .btn-primary.focus {
    color: #fff;
    background-color: #9bdbba;
    border-color: #9bdbba; }
  .btn-primary:hover {
    color: #fff;
    background-color: #89c1a4;
    border-color: #89c1a4; }
  .btn-primary:active, .btn-primary.active,
  .open > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #9bdbba;
    border-color: #9bdbba; }
   .btn-primary:active:focus{
       color: #fff;
    background-color: #9bdbba;
    border-color: #9bdbba;  
   }
</style>
<body>
    <div class="welcome">
     <!--Calendar-->
         <table border='1'  bordercolor='white' cellspacing='0' cellpadding='0' align=center>
<tr><td><table cellspacing='0' cellpadding='0' align=center width='1000' height='600' border='0'><tr><td  align=center bgcolor='#a7e8c6' style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;"><font size='3' face='Tahoma'> <a href='html_calendar.php?prm=12&chm=-1' rel="nofollow"></a></font> </td><td colspan=5 align=center bgcolor='#a7e8c6'><font size='7' face='Tahoma'>January 2017 </font> </td><td  align=center bgcolor='#a7e8c6' style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;"><font size='3' face='Tahoma' > <!--<a href='html_calendar.php?prm=12&chm=1' rel="nofollow">></a> --> </font></td></tr><tr><td style="width: 10%;"><font size='5' face='Tahoma'><b>Sun</b></font></td><td style="width: 10%;"><font size='5' face='Tahoma'><b>Mon</b></font></td><td style="width: 10%;"><font size='5' face='Tahoma'><b>Tue</b></font></td><td style="width: 10%;"><font size='5' face='Tahoma'><b>Wed</b></font></td><td style="width: 10%;"><font size='5' face='Tahoma'><b>Thu</b></font></td><td style="width: 10%;"><font size='5' face='Tahoma'><b>Fri</b></font></td><td style="width: 10%;"><font size='5' face='Tahoma'><b>Sat</b></font></td></tr><tr><a><td valign=top><font size='4' face='Tahoma'>1  
<br>
 </font></style></td></a><a><td valign=top><font size='4' face='Tahoma'>2  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>3  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>4 <br><br> 
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>5  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>6  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>7  
<br>
 </font></td></tr><tr></a><a><td valign=top><font size='4' face='Tahoma'>8  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>9  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>10  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>11  <br><br>
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>12  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>13  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>14  
<br>
 </font></td></tr><tr></a><a><td valign=top><font size='4' face='Tahoma'>15  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>16  <br> <br> </font>
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>17  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>18  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>19  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>20  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>21  
<br>
 </font></td></tr><tr></a><a><td valign=top><font size='4' face='Tahoma'>22  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>23  <br><br>
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>24  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>25  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>26  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>27  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>28  
<br>
 </font></td></tr><tr></a><a><td valign=top><font size='4' face='Tahoma'>29  
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>30  <br><br>
<br>
 </font></td></a><a><td valign=top><font size='4' face='Tahoma'>31  
<br>
</font></td></a><a><td valign=top><font size='4' color= '#8e8e8e' face='Tahoma'>1  
<br>
</font></td></a><a><td valign=top><font size='4' color= '#8e8e8e' face='Tahoma'>2  
<br>
</font></td></a><a><td valign=top><font size='4' color= '#8e8e8e' face='Tahoma'>3  
<br>
</font></td></a><a><td valign=top><font size='4' color= '#8e8e8e' face='Tahoma'>4  
<br>
 </font></td></a></tr><tr></tr></table></td></tr></table>
 <!--Link to HHS calandar.-->
 <h5 class="welcome" style=""> A simple calendar for your reference. The official Heritage High School calendar can be found <a target="_blank"href="http://blountk12.org/images/PDFs/BCSParentCalendar2016-17.pdf">here.</a></h5>
    </div>
</body>
@endsection