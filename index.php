<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<title>ARONO REBECCA</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js" ></script>

    <!-- MetisMenu CSS -->
<link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
<link href="css/sb-admin-2.css" rel="stylesheet">

<link href="stylesheet.css" rel="stylesheet">

    <!-- Custom Fonts -->
<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<script>
function myFunction() {
    var x = document.getElementById("navbarlist");
    if (x.className === "topnavigation") {
        x.className += " responsive";
    } else {
        x.className = "topnavigation";
    }
}
</script>

</head>

<body id="body" style="position:relative; min-height:700px; background-image:url(rebecca.png); font-family:Arial, Helvetica, sans-serif; font-size:16px;">



    
<div id="top">
  <div class="toptext" style="font-family:'Times New Roman', Times, serif; font-style:italic">BRING DESIGNS TO REALITY  </div>
</div>
    

<ul id="navbarlist" class="topnavigation" data-spy="affix-bottom" data-offset-top="25">
  <li><a href="index.php" class="active">Home</a></li>
  <li><a href="index.php?action=archive">ARCHIVEMENTS</a></li>
  <li><a href="index.php?action=experience">EXPERIENCE</a></li>
  <li><a href="index.php?action=interest">INTERESTS</a></li>
  <li><a href="next.php">gallary</a></li>
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:17px;" onclick="myFunction()">☰</a>
  </li>
</ul>

<div id="container">    
	<div class="container-fluid" id="contents">
           <?php
		if(!empty($_REQUEST['action']))
		{			
			include "call.php";
		}
		else{?>
      
<h3><img src="rebecca1.png" style="width:40px; height:40px; padding-right:2px"/>&nbsp;&nbsp;ARONO REBECCA</h3>
<h4><b>Nationality:</b> Ugandan</h4>
<h4><b>Email:</b>aronorebecca@gmail.com</h4>
<h4><b>Education:</b></h4>
<p>2011 - 2015:  Bachelor of Science in Software Engineering from Makerere University.</p>  
<p>2009 - 2010:  Uganda Advanced Certificate Of Education from St. Paul’s collage Mbale (UACE). </p>  
<p>2005 - 2008:  Uganda Certificate of Education from St. Paul’s collage Mbale (UCE).</p> 
<h4><b>Programming Laguages:</b></h4>
<ul>
<li>HTML</li><li>PHP</li><li>CSS</li><li>C# for windows phone</li><li>MYSQL</li><li>JAVASCRIPT</li><li>BOOSTRAP</li><li>GIT</li>
</ul>
<h4><b>SDLC Tasks:</b></h4>
<p> ANALYSIS, DESIGN, DEVELOPMENT and TESTING.</p>

<table>
<tr><a><i class="fa fa-facebook fa-fw"></i>Rebecca Arono</a><a><i class="fa fa-twitter fa-fw"></i>arono rebecca</a><a><i class="fa fa-skype fa-fw"></i>ARONO REBECCA</a><a><i class="fa fa-instagram fa-fw"></i>arono rebecca</a><a><i class="fa fa-mobile-phone fa-fw"></i>256 783 196136</a></tr>

</table>

			<?php }
		
		?>
			
	</div>
</div>        


<div class="nav navbar-inverse navbar-fixed-bottom" style="color:#F0F;">
<p align="center"><b>&copy;<?php echo Date("Y"); ?> Arono Rebecca</b></p>
</div>


</body></html>