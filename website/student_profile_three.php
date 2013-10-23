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

	
	
	
	$major =$_POST['major'];
	$progskills =$_POST['cpp'].','.$_POST['csharp'].','.$_POST['c'].','.$_POST['java'].','.$_POST['python'].','.$_POST['php'].','.$_POST['js'].','.$_POST['dotnet'].','.$_POST['perl'].','.$_POST['ruby'].','.$_POST['html'].','.$_POST['css'].','.$_POST['sql'].','.$_POST['fortran'].','.$_POST['haskell'].','.$_POST['matlab'].','.$_POST['objc'].','.$_POST['batchs'].','.$_POST['shells'].','.$_POST['vbasic'].','.$_POST['lisp'].','.$_POST['prolog'].','.$_POST['qt'].','.$_POST['pascal'].','.$_POST['cobalt'];
	$hsskills=$_POST['netsetup'].','.$_POST['lan'].','.$_POST['vpn'].','.$_POST['printers'];
	$devskills=$_POST['agile'].','.$_POST['scrum'].','.$_POST['waterfall'].','.$_POST['virusrem'].','.$_POST['systemsetup'].','.$_POST['ts'].','.$_POST['hardinsrep'].','.$_POST['linux'].','.$_POST['applesucks'].','.$_POST['windows'].','.$_POST['cms'];
	$labskills=$_POST['solprep'].','.$_POST['reactcomp'].','.$_POST['matsynth'].','.$_POST['devexp'].','.$_POST['matsaftey'];
	$comskills=$_POST['ps'].','.$_POST['rt'].','.$_POST['biling'].','.$_POST['tskills'];
	$ideskills=$_POST['netbeans'].','.$_POST['vstudio'].','.$_POST['eclipse'].','.$_POST['cblocks'].','.$_POST['rsql'].','.$_POST['delphi'].','.$_POST['xcode'].','.$_POST['padre'].','.$_POST['vim'];
	$physkills=$_POST['quantump'].','.$_POST['cmp'].','.$_POST['optics'].','.$_POST['elcmag'].','.$_POST['thermo'];
	$mathskills=$_POST['stats'].','.$_POST['calc'].','.$_POST['de'].','.$_POST['lalgebra'].','.$_POST['actsci'].','.$_POST['acmath'];
	$chemskills=$_POST['organic'].','.$_POST['kinects'];
	$check = $_POST['check'];

	
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
	<h2 style="color:#000"> Step 3: Select Experience Level </h2>

 
<div>
<div style="float:left; width: 40%;">
<h3>Experience Levels:</h3>
<form action="student_profile_four.php" method ="post" style="float:center">
<input type="hidden" name="none" value="0" />
<input type="checkbox" name="none" value="1">None<br>
<input type="hidden" name="pt" value="0" />
<input type="checkbox" name="pt" value="1">Part-Time<br>
<input type="hidden" name="ft" value="0" />
<input type="checkbox" name="ft" value="1">Full-Time<br>
<input type="hidden" name="intern" value="0" />
<input type="checkbox" name="intern" value="1">Internship<br>
<input type="hidden" name="mintern" value="0" />
<input type="checkbox" name="mintern" value="1">Multiple Internships<br>
<input type="hidden" name="coop" value="0" />
<input type="checkbox" name="coop" value="1">Co-op<br>
<input type="hidden" name="mcoop" value="0" />
<input type="checkbox" name="mcoop" value="1">Multiple Co-ops<br>
<input type="hidden" name="research" value="0" />
<input type="checkbox" name="research" value="1">Research<br>


<input type="hidden" name="check" value="<?php echo $check; ?>" />

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
<br><br><br><br><input type="submit" value="Submit">
</form>

</div>
</div>
</div></div>
<!--==============================footer=================================-->

	
  <?php include 'includes/footer.php'; ?>

</body>
</html>

