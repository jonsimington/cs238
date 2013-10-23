
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
	<h2 style="color:#000"> Upload Resume: </h2>
	
	 <form enctype="multipart/form-data" action="add.php" method="POST"> 

 Resume: <input type="file" name="photo"><br> 
 <input type="submit" value="Add"> 
 </form>

<div>


</div>
</div>
</div></div>
<!--==============================footer=================================-->

	
  <?php include 'includes/footer.php'; ?>

</body>
</html>

