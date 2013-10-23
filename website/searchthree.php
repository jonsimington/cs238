<!DOCTYPE html>
<?php



	
	
	
	$major =$_POST['major'];
	$skills =$_POST['cpp'].','.$_POST['csharp'].','.$_POST['c'].','.$_POST['java'].','.$_POST['python'].','.$_POST['php'].','.$_POST['js'].','.$_POST['dotnet'].','.$_POST['perl'].','.$_POST['ruby'].','.$_POST['html'].','.$_POST['css'].','.$_POST['sql'].','.$_POST['netsetup'].','.$_POST['lan'].','.$_POST['vpn'].','.$_POST['printers'].','.$_POST['agile'].','.$_POST['scrum'].','.$_POST['waterfall'].','.$_POST['virusrem'].','.$_POST['systemsetup'].','.$_POST['ts'].','.$_POST['hardinsrep'].','.$_POST['linux'].','.$_POST['applesucks'].','.$_POST['windows'].','.$_POST['cms'].','.$_POST['solprep'].','.$_POST['reactcomp'].','.$_POST['matsynth'].','.$_POST['devexp'].','.$_POST['ps'].','.$_POST['rt'];
	$NULL = 'NULL';
	$skills = str_replace('"', '', $skills);
	$array = explode(',',$skills);
	$array = array_diff($array,array($NULL));
	$skills = implode(',',$array);
	$array = explode(',',$major);
	$array = array_diff($array,array($NULL));
	$major = implode(',',$array);

	
	
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
<form action="searchfour.php" method ="post" style="float:center">
<input type="hidden" name="none" value="NULL" />
<input type="checkbox" name="none" value="none">None<br>
<input type="hidden" name="pt" value="NULL" />
<input type="checkbox" name="pt" value="pt">Part-Time<br>
<input type="hidden" name="ft" value="NULL" />
<input type="checkbox" name="ft" value="ft">Full-Time<br>
<input type="hidden" name="intern" value="NULL" />
<input type="checkbox" name="intern" value="intern">Internship<br>
<input type="hidden" name="mintern" value="NULL" />
<input type="checkbox" name="mintern" value="mintern">Multiple Internships<br>
<input type="hidden" name="coop" value="NULL" />
<input type="checkbox" name="coop" value="coop">Co-op<br>
<input type="hidden" name="mcoop" value="NULL" />
<input type="checkbox" name="mcoop" value="mcoop">Multiple Co-ops<br>
<input type="hidden" name="research" value="NULL" />
<input type="checkbox" name="research" value="research">Research<br>



<input type="hidden" name="major" value="<?php echo $major; ?>" />
<input type="hidden" name="skills" value=<?php echo $skills; ?>" />
<br><br><br><br><input type="submit" value="Submit">
</form>

</div>
</div>
</div></div>
<!--==============================footer=================================-->

	
  <?php include 'includes/footer.php'; ?>

</body>
</html>

