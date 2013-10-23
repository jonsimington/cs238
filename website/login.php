<?php #login.php 
           #####[make sure you put this code before any html output]#####
session_start();

//connect to server
$dbc = mysqli_connect('localhost','login_user','a1b2c3d4') or 
           die('could not connect: '. mysqli_connect_error());

//select db
mysqli_select_db($dbc, 'login') or die('no db connection');

//check if the login form has been submitted
if(isset($_POST['go'])){
	#####form submitted, check data...#####
	
        //step 1a: sanitise and store data into vars (storing encrypted password)
	$usr = mysqli_real_escape_string($dbc, htmlentities($_POST['u_name']));
	$u_pass =$_POST['u_pass'];
	$psw = SHA1($u_pass) ; //using SHA1() to encrypt passwords  
        //step2: create query to check if username and password match
	$q = "SELECT * FROM members WHERE username='$usr' AND password='$psw'  ";
	
	$_SESSION['username'] = $usr;
	
	//step3: run the query and store result
	$res = mysqli_query($dbc, $q) or trigger_error("Query Failed! SQL: $q - Error: ".mysqli_error($dbc), E_USER_ERROR);
	
	//make sure we have a positive result
	if(mysqli_num_rows($res) == 1){
		#########  LOGGING IN  ##########
		//starting a session  
                session_start();

                //creating a log SESSION VARIABLE that will persist through pages   
		$_SESSION['log'] = 'in';
		$get_ID = "SELECT id FROM members WHERE username='$usr'";
		$_SESSION['UID'] = mysqli_query($dbc, $get_ID);

		//redirecting to restricted page
		header('location:student.php');
	} else {
                //create an error message   
		$error = 'Wrong details. Please try again';	
	}
}//end isset go
?> 

<!DOCTYPE html>
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
	
<?php
	session_start();
	$register = 'NULL';
	$register = $_GET['register'];
	if ($register == 'success')
		echo('Registration Successful, Please Login Now');
		
	
?>
<form method="post" action="#" style="float:center;">
    <b><label for="u_name">Username:</label></b>
    <p><input type="text" name="u_name" value=""></p>
    
    <b><label for="u_pass">password:</label></b>
    <p><input type="password" name="u_pass" value=""></p>
    
    <p><button type="submit" name="go">Login</button></p>
</form>
<!-- A paragraph to display eventual errors -->
<p><strong><?php if(isset($error)){echo $error;}  ?></strong></p> 
</div>
</div>

<!--==============================footer=================================-->

	
  <?php include 'includes/footer.php'; ?>

</body>
</html>
