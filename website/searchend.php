<?php

	$major =$_POST['major'];
	$skills =$_POST['skills'];
	$NULL = 'NULL';
	
	$experience =$_POST['experience'];
	$standing =$_POST['fresh'].','.$_POST['so'].','.$_POST['jun'].','.$_POST['sen'].','.$_POST['gm'].','.$_POST['gp'];

	$skills = str_replace('"', '', $skills);
	$major = str_replace('"', '', $major);
	$experience = str_replace('"', '', $experience);
	$standing = str_replace('"', '', $standing);
	
	
	$array = explode(',',$standing);
	$array = array_diff($array,array($NULL));
	$standing = implode(',',$array);
	
	ltrim($skills);
	ltrim($major);
	ltrim($experience);
	ltrim($standing);

	$standinga = explode(',',$standing);
	$skillsa = explode(',',$skills);
	$majora = explode(',',$major);
	$experiencea = explode(',',$experience);
	
	$name = "login_user";
	$pas = "a1b2c3d4";
	$dbname = "login";
	
	$con = mysqli_connect("localhost",$name,$pas);
	
	mysqli_select_db($con, $dbname);
		

	$qstring = "SELECT userID,resume FROM skills WHERE ";
	for( $x=0;$x<sizeof($majora);$x++)
	{	
		if( $x != 0)
			$qstring .= " AND ";	
		
		$qstring .= $majora[$x];
		$qstring .= " = 'true' ";
	}
	
	for( $x=0;$x<sizeof($skillsa);$x++)
	{	
		$qstring .= " AND ";
		$qstring .= $skillsa[$x];
		$qstring .= " = 'true' ";
	}
	for( $x=0;$x<sizeof($experiencea);$x++)
	{	
		$qstring .= " AND ";
		$qstring .= $experiencea[$x];
		$qstring .= " = 'true' ";
	}
	for( $x=0;$x<sizeof($standinga);$x++)
	{	
		$qstring .= " AND ";
		$qstring .= $standinga[$x];
		$qstring .= " = 'true' ";
	}
	$qstring .= ";";
	$result = mysqli_query($con, $qstring) or trigger_error("Query Failed! SQL: $qstring - Error: ".mysqli_error($con), E_USER_ERROR);

	
	?>
	
<html lang="en">
	 <head>
	 <title>hireAminer</title>
	 <meta charset="utf-8">
	 <link rel="icon" href="images/favicon.ico">
	 <link rel="shortcut icon" href="images/favicon.ico" />
	 <link rel="stylesheet" href="css/style.css">
	 <style>
		table,th,tr,td
		{
		border: 1px solid black;
		padding: 20px;
		}
		table td
		{
		border: 1px solid black;
		padding: 20px;
		}
	</style>
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
	<h2 style="color:#000"> Search Results: </h2>
	<table border='1'>
	<?php 
	
	
	echo "
	<tr>
		<th>UserID</th>
		<th>Resume</th>
	</tr>";

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['userID'] . "</td>";
		echo "<td>" . $row['resume'] . "</td>";
		echo "</tr>";
	}


	?>
	</table>
	
	
	</div>
</div>
</div>
</div></div>
<!--==============================footer=================================-->

	
  <?php include 'includes/footer.php'; ?>

</body>
</html>

