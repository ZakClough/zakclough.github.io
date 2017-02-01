<!doctype html>
<html>
<head>
	<?php
		$to="duane.erickson@mtchs.org";
		$subject="New Customer";
		$from=$_REQUEST['emailAddress'];
		$message="Name: ".$_REQUEST['fullName']."\nEmail: ".$_REQUEST['emailAddress']."\nDay Arriving: ".$_REQUEST['dayArrive']."\nDay Leaving: ".$_REQUEST['dayLeave']."\nPhone: ".$_REQUEST['phoneNumber'];
		$spamCheck=$_REQUEST['address'];
		
		if($spamCheck)
			die("Don't send this email");
		else {
			mail($to,$subject,$message,$from);
		}
	
	?>
	<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <link rel="stylesheet" type="text/css" href="VRBO_styles.css">
	<meta charset="utf-8">
	<title>Thank you</title>
<script type="text/javascript">
function GetClock(){
var d=new Date();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
<link rel="icon" type="image/x-icon" href="Images/favicon.jpg" />
</head>

<body>
<div id="main">
<header><h1></h1></header><!-- #BeginLibraryItem "/Library/Nav.lbi" -->
<nav>
	<ul>
    	<li><a href="VRBO_Home.html">Home</a></li><li>
        <a href="VRBO_Rates.html">Rates</a></li><li>
        <a href="VRBO_Location.html">Location</a></li><li>
        <a href="VRBO_ManagerInfo.html">About</a></li><li>
        <a href="VRBO_Photos.html">Photos</a></li>
    </ul>
</nav>    <!-- #EndLibraryItem --><section class="thanksSection">
    <p>Thank you for renting our condo!</p>    		
  </section>
  <aside>
  <script language="JavaScript">
var now = new Date(); 
var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
function fourdigits(number) {
    return (number < 1000) ? number + 1900 : number;
                                }
today =  days[now.getDay()] + ", " +
         months[now.getMonth()] + " " +
         date + ", " +
         (fourdigits(now.getYear())) ;
document.write(today);
</script>
  </aside><!-- #BeginLibraryItem "/Library/footer.lbi" -->
<footer>
	<span>&copy; Copyright 2015</span><p>Contact Us at: 1-(787) 667-8415</p>
</footer><!-- #EndLibraryItem --></div>
</body>
</html>