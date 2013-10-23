<?php
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
	$progskills =$_POST['progskills'];
	$hsskills = $_POST['hsskills'];
	$devskills = $_POST['devskills'];
	$labskills = $_POST['labskills'];
	$comskills = $_POST['comskills'];
	$ideskills = $_POST['ideskills'];
	$physkills = $_POST['physkills'];
	$mathskills = $_POST['mathskills'];
	$chemskills = $_POST['chemskills'];	
	$experience =$_POST['experience'];
	$standing =$_POST['fresh'].','.$_POST['so'].','.$_POST['jun'].','.$_POST['sen'].','.$_POST['gm'].','.$_POST['gp'];
	
	$NULL = 'NULL';
	$array = explode(',',$standing);
	$array = array_diff($array,array($NULL));
	$standing = implode(',',$array);
	list($ee, $cpe, $cs, $phy, $chem, $amath) = explode(',',$major);


	list($cpp,$csharp,$c,$java,$python,$php,$js,$dotnet,$perl,$ruby,$html,$css,$sql,$fortran,$haskell,$matlab,$objc,$batchs,$shells,$vbasic,$lisp,$prolog,$qt,$pascal,$cobalt)= explode(',',$progskills);
	list($netsetup,$lan,$vpn,$printers)= explode(',',$hsskills);
	list($agile,$scrum,$waterfall,$virusrem,$systemsetup,$ts,$hardinsrep,$linux,$applesucks,$windows,$cms)= explode(',',$devskills);
	list($solprep,$reactcomp,$matsynth,$devexp,$matsaftey)= explode(',',$labskills);
	list($ps,$rt,$biling,$tskills)= explode(',',$comskills);
	list($netbeans,$vstudio,$eclipse,$cblocks,$rsql,$delphi,$xcode,$padre,$vim)= explode(',',$ideskills);
	list($quantump,$cmp,$optics,$elecmag,$thermo)= explode(',',$physkills);
	list($stats,$calc,$de,$lalgebra,$actsci,$acmath)= explode(',',$mathskills);
	list($organic,$kinects)= explode(',',$chemskills);


	list($none,$pt,$ft,$intern,$mintern,$coop,$mcoop,$research) = explode(',',$experience);
	list($fresh,$so,$jun,$sen,$gm,$gp) = explode(',',$standing);
	
	$name = "login_user";
	$pas = "a1b2c3d4";
	$dbname = "login";
	$con = mysqli_connect("localhost",$name,$pas);
	$conm = mysql_connect("localhost",$name,$pas);
	mysqli_select_db($con,$dbname);
	mysql_select_db($dbname,$conm);
	
	$check = $_POST['check'];

	$username = $_SESSION['username'];
	$ID = mysql_query("SELECT id FROM members WHERE username='$username'",$conm);
	$ID = mysql_result($ID,0);
	
	if($check = 'create')
	{
	$qstring = "INSERT INTO miscskills(userID,standing,ee,cpe,cs,phy,chem,amath,none,pt,ft,intern,mintern,coop,mcoop,research) VALUES ('$ID','$standing','$ee','$cpe','$cs','$phy','$chem','$amath','$none','$pt','$ft','$intern','$mintern','$coop','$mcoop','$research')";
	mysqli_query($con,$qstring) or trigger_error("Query Failed! SQL: $qstring - Error: ".mysqli_error($con), E_USER_ERROR);
	}
	else
	{
			$qstring = "MODIFY miscskills(userID,standing,ee,cpe,cs,phy,chem,amath,none,pt,ft,intern,mintern,coop,mcoop,research) VALUES ('$ID','$standing','$ee','$cpe','$cs','$phy','$chem','$amath','$none','$pt','$ft','$intern','$mintern','$coop','$mcoop','$research')";
			mysqli_query($con,$qstring) or trigger_error("Query Failed! SQL: $qstring - Error: ".mysqli_error($con), E_USER_ERROR);
	}
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
	<h2 style="color:#000"> Search Results: </h2>
	
	<p>query the database and return results</p>

<div>


</div>
</div>
</div></div>
<!--==============================footer=================================-->

	
  <?php include 'includes/footer.php'; ?>

</body>
</html>

