<?php #index.php 
           #####[make sure you put this code before any html output]#####

//starting the session
session_start();


   ####  CODE FOR LOG OUT #### 
if(isset($_GET['log']) && ($_GET['log']=='out')){
        //if the user logged out, delete any SESSION variables
	session_destroy();
	
        //then redirect to login page
	header('location:index.php');
}//end log out

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
<!------ <div class="slider-relative">
	<div class="slider-block">
	  <div class="slider">
		<ul class="items">
		  <li><img src="images/slide.jpg" alt="">
			<div class="banner">The experience<br>
 You May Trust</div>
		  </li>
		  <li><img src="images/slide1.jpg" alt="">
			  <div class="banner">Make a right<br> Choise</div>
		  </li>
		  <li><img src="images/slide2.jpg" alt="">
			  <div class="banner">We will show you the<br>
way to success!</div>
		  </li>
		  <li><img src="images/slide3.jpg" alt="">
			  <div class="banner">Well being of our<br>
clients first!</div>
		  </li>
		</ul>
	  </div>
	</div>

 </div> -->
    <?php include 'includes/menu.php'; ?>
 </div>
<!--=======content================================-->

<!-------<div class="content page1"><div class="ic"></div>
  <div class="container_12">
	<div class="grid_3">
	  <img src="images/page1_img5.jpg" alt="">
	  <div class="text1">family law and estate planning</div>
	  <p class="col1"><a href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow">Click here</a> for more info about this free website template created by TemplateMonster.com </p>
	  At vero eos et accusamus et iusto odio dignissimos ducimus qui bl abd  jll. 
	  <br>
	  <a href="#" class="btn">more</a>
	</div>
	<div class="grid_3">
	  <img src="images/page1_img6.jpg" alt="">
	  <div class="text1">Corporate Law &amp;
Litigation</div>At vero eos et accusamus et iusto odio dignissimos ducimus qui bl abd gdihtii praesentium voluptatum deenir rf uiti jll atque. Corrupti quos doloregts et quas molestias excepturi sint  hip occaecati. At vero eos et  hhj  jk kjusamu.
	  <br>
	  <a href="#" class="btn">more</a>
	</div>
	<div class="grid_3">
	  <img src="images/page1_img7.jpg" alt="">
	  <div class="text1">Real Estate Litigation &amp; Transactions</div>At vero eos et accusamus et iusto odio dignissimos ducimus qui bl abd gdihtii praesentium voluptatum deenir rf uiti jll atque. Corrupti quos doloregts et quas molestias excepturi sint  hip occaecati. At vero eos et  hhj  jk kjusamu.
	  <br>
	  <a href="#" class="btn">more</a>
	</div>
	<div class="grid_3">
	  <img src="images/page1_img8.jpg" alt="">
	  <div class="text1">Personal Injury<br>&nbsp;</div>At vero eos et accusamus et iusto odio dignissimos ducimus qui bl abd gdihtii praesentium voluptatum deenir rf uiti jll atque. Corrupti quos doloregts et quas molestias excepturi sint  hip occaecati. At vero eos et  hhj  jk kjusamu.
	  <br>
	  <a href="#" class="btn">more</a>
	</div>
  </div>
</div>--->

<!--==============================footer=================================-->

	
  <?php include 'includes/footer.php'; ?>

</body>
</html>