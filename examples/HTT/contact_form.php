<!doctype html>
<html>
<head>
	<?php
		$to="duane.erickson@mtchs.org";
		$subject="New Person";
		$from=$_REQUEST['emailAddress'];
		$message="Name: ".$_REQUEST['fullName']."\nEmail: ".$_REQUEST['emailAddress']."\nPhone: ".$_REQUEST['phoneNumber']."\nComments: ".$_REQUEST['comments'];
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
    
    <link rel="stylesheet" type="text/css" href="HTT_CSS.css">
	<meta charset="utf-8">
	<title>Thank you</title>
<link rel="icon" type="image/x-icon" href="Images/favicon.jpg" />
</head>

<body>
<div id="main">
<header><img src="Images/How-To-Tech_Logo_Final.png" width="145" height="146" alt=""/><h1>HOW TO TECH</h1></header>
	<nav>
        <ul>
            <li><a href="#">Tutorials</a>
                <ul>
                    <li><a href="home.html">Programming</a></li>
                    <li><a href="home.html">Media Arts</a></li>
                    <li><a href="home.html">Video Prod.</a></li>
                    <li><a href="home.html">3D Design</a></li>
                    <li><a href="home.html">Video Games</a></li>
                </ul><li>
                <a href="#">Contact</a></li>
        </ul>
    </nav>
    
    <div class="scrollable">
    <section>
    <p>Thank you for your comments.</p>    
    </section>
    </div>
    <footer>
        <p>Copyright 2016</p>    
    </footer>
</div>
</body>
</html>
<footer>
	<span>&copy; Copyright 2016</span>
</footer><!-- #EndLibraryItem --></div>
</body>
</html>