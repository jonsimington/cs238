<!DOCTYPE html>
<?php


//starting the session
session_start();

//checking if a log SESSION VARIABLE has been set
if( !isset($_SESSION['log']) || ($_SESSION['log'] != 'in') ){
        //if the user is not allowed, display a message and a link to go back to login page
	header("location:login.php");
        
        //then abort the script
	exit();
}

/**
*      ####  CODE FOR LOG OUT #### click here to see the logout tutorial 
*/
	
	
		$check = $_POST['check'];

	$major =$_POST['major'];
	$progskills =$_POST['progskills'];
	$hsskills = $_POST['hsskills'];
	$devskills = $_POST['devskills'];
	$labskills = $_POST['labskills'];
	$comskills = $_POST['comskills'];
	$ideskills = $_POST['ideskills'];
	$physkills = $_POST['physkills'];
	$mathskills = $_POST['mathskills'];
	$chemskills = $_POST['chemskills'];
	$experience =$_POST['none'].','.$_POST['pt'].','.$_POST['ft'].','.$_POST['intern'].','.$_POST['mintern'].','.$_POST['coop'].','.$_POST['mcoop'].','.$_POST['research'];
	
?>
<html lang="en">
	 <head>
	 <title>hireAminer</title>
	 <meta charset="utf-8">
	 <link rel="icon" href="images/favicon.ico">
	 <link rel="shortcut icon" href="images/favicon.ico" />
	 <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/slider.css">
	 <script src="js/jquery.js"></script>
	 <script src="js/jquery-migrate-1.1.1.js"></script>
	 <script src="js/superfish.js"></script>
	 <script src="js/jquery.equalheights.js"></script>
	 <script src="js/jquery.easing.1.3.js"></script>
	 <script src="js/tms-0.4.1.js"></script>
	 <script>
	  $(window).load(function(){
	  $('.slider')._TMS({
			  show:0,
			  pauseOnHover:false,
			  prevBu:'.prev',
			  nextBu:'.next',
			  playBu:false,
			  duration:800,
			  preset:'fade', 
			  pagination:true,//'.pagination',true,'<ul></ul>'
			  pagNums:false,
			  slideshow:8000,
			  numStatus:false,
			  banners:true,
		  waitBannerAnimation:false,
		progressBar:false
	  })  
	  });
	  

	 </script>
	 <!--[if lt IE 8]>
	   <div style=' clear: both; text-align:center; position: relative;'>
		 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
		   <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
		 </a>
	  </div>
	<![endif]-->
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <link rel="stylesheet" media="screen" href="css/ie.css">

	<![endif]-->
	 </head>
	 <body>
<!--==============================header=================================-->
 
  <?php include 'includes/header.php'; ?>

<div class="top_block">
    <?php include 'includes/menu.php'; ?>
 </div>
<!--=======content================================-->

<div class="content page1"><div class="ic"></div>
 <div class="container_12">
	<h2 style="color:#000"> Step 4: Select Class Standing </h2>

 
<div>
<div style="float:left; width: 40%;">
<h3>Class Standing:</h3>
<form action="student_profile_end.php" method ="post" style="float:center">
<input type="hidden" name="fresh" value="NULL" />
<input type="checkbox" name="fresh" value="fresh">Freshman<br>
<input type="hidden" name="so" value="NULL" />
<input type="checkbox" name="so" value="so">Sophomore<br>
<input type="hidden" name="jun" value="NULL" />
<input type="checkbox" name="jun" value="jun">Junior<br>
<input type="hidden" name="sen" value="NULL" />
<input type="checkbox" name="sen" value="sen">Senior<br>
<input type="hidden" name="gm" value="NULL" />
<input type="checkbox" name="gm" value="gn">Graduate Student - Masters<br>
<input type="hidden" name="gp" value="NULL" />
<input type="checkbox" name="gp" value="gp">Graduate Student - PhD<br>



<input type="hidden" name="major" value="<?php echo $major; ?>" />
<input type="hidden" name="progskills" value=<?php echo $progskills; ?>" />
<input type="hidden" name="hsskills" value=<?php echo $hsskills; ?>" />
<input type="hidden" name="devskills" value=<?php echo $devskills; ?>" />
<input type="hidden" name="labskills" value=<?php echo $labskills; ?>" />
<input type="hidden" name="comskills" value=<?php echo $comskills; ?>" />
<input type="hidden" name="ideskills" value=<?php echo $ideskills; ?>" />
<input type="hidden" name="physkills" value=<?php echo $physkills; ?>" />
<input type="hidden" name="mathskills" value=<?php echo $mathskills; ?>" />
<input type="hidden" name="chemskills" value=<?php echo $chemskills; ?>" />
<input type="hidden" name="experience" value=<?php echo $experience; ?>" />
<input type="hidden" name="check" value="<?php echo $check; ?>" />

<br><br><br><br><input type="submit" value="Submit">
</form>

</div>
</div>
</div></div>
<!--==============================footer=================================-->

	
  <?php include 'includes/footer.php'; ?>

</body>
</html>

