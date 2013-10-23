<!DOCTYPE html>
<?php



	
	
	
	$major =$_POST['ee'].','.$_POST['cpe'].','.$_POST['cs'];
	$major = str_replace('"', '', $major);
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
	<h2 style="color:#000"> Step 2: Select Skills </h2>

 
<div>
<div style="float:left; width: 40%;">
<h3>Programming Skills</h3>
<form action="searchthree.php" method ="post" style="float:center">
<input type="hidden" name="cpp" value="NULL" />
<input type="checkbox" name="cpp" value="cpp">C++<br>
<input type="hidden" name="csharp" value="NULL" />
<input type="checkbox" name="csharp" value="csharp">C#<br>
<input type="hidden" name="c" value="NULL" />
<input type="checkbox" name="c" value="c">C<br>
<input type="hidden" name="java" value="NULL" />
<input type="checkbox" name="java" value="java">Java<br>
<input type="hidden" name="python" value="NULL" />
<input type="checkbox" name="python" value="python">Python<br>
<input type="hidden" name="php" value="NULL" />
<input type="checkbox" name="php" value="php">Php<br>
<input type="hidden" name="js" value="NULL" />
<input type="checkbox" name="js" value="js">Javascript<br>
<input type="hidden" name="dotnet" value="NULL" />
<input type="checkbox" name="dotnet" value="dotnet">.Net<br>
<input type="hidden" name="perl" value="NULL" />
<input type="checkbox" name="perl" value="perl">Perl<br>
<input type="hidden" name="ruby" value="NULL" />
<input type="checkbox" name="ruby" value="ruby">Ruby/Ruby on Rails<br>
<input type="hidden" name="html" value="NULL" />
<input type="checkbox" name="html" value="html">HTML/HTML5<br>
<input type="hidden" name="css" value="NULL" />
<input type="checkbox" name="css" value="css">CSS<br>
<input type="hidden" name="sql" value="NULL" />
<input type="checkbox" name="sql" value="sql">SQL/mySQL<br>




<h3>Networking</h3>
<input type="hidden" name="netsetup" value="NULL" />
<input type="checkbox" name="netsetup" value="netsetup">Network Setup<br>
<input type="hidden" name="lan" value="NULL" />
<input type="checkbox" name="lan" value="lan">LAN<br>
<input type="hidden" name="vpn" value="NULL" />
<input type="checkbox" name="vpn" value="vpn">VPN<br>
<input type="hidden" name="printers" value="NULL" />
<input type="checkbox" name="printers" value="printers">Printers<br>

<h3>Development</h3>
<input type="hidden" name="agile" value="NULL" />
<input type="checkbox" name="agile" value="agile">Agile<br>
<input type="hidden" name="scrum" value="NULL" />
<input type="checkbox" name="scrum" value="scrum">Scrum Agile<br>
<input type="hidden" name="waterfall" value="NULL" />
<input type="checkbox" name="waterfall" value="wf">Waterfall<br>

</div>
<div style="float:right; width:40%">
<h3>Computer Software/Hardware</h3>
<input type="hidden" name="virusrem" value="NULL" />
<input type="checkbox" name="virusrem" value="virusrem">Virus/Spyware Removal<br>
<input type="hidden" name="systemsetup" value="NULL" />
<input type="checkbox" name="systemsetup" value="systemsetup">System Setup<br>
<input type="hidden" name="ts" value="NULL" />
<input type="checkbox" name="ts" value="ts">Troubleshooting<br>
<input type="hidden" name="hardinsrep" value="NULL" />
<input type="checkbox" name="hardinsrep" value="hardinsrep">Hardware Install/Repair<br>
<input type="hidden" name="linux" value="NULL" />
<input type="checkbox" name="linux" value="linux">Linux<br>
<input type="hidden" name="applesucks" value="NULL" />
<input type="checkbox" name="applesucks" value="applesucks">OSX<br>
<input type="hidden" name="windows" value="NULL" />
<input type="checkbox" name="windows" value="windows">Windows<br>
<input type="hidden" name="cms" value="NULL" />
<input type="checkbox" name="cms" value="cms">CMS<br>


<h3>Laboratory Skills</h3>
<input type="hidden" name="solprep" value="NULL" />
<input type="checkbox" name="solprep" value="solprep">Solution Preperation<br>
<input type="hidden" name="reactcomp" value="NULL" />
<input type="checkbox" name="reactcomp" value="reactcomp">Reaction Equations/Computing<br>
<input type="hidden" name="matsynth" value="NULL" />
<input type="checkbox" name="matsynth" value="matsynth">Material Synth.<br>
<input type="hidden" name="devexp" value="NULL" />
<input type="checkbox" name="devexp" value="devexp">Developing Experiments<br>


<h3>Communication Skills</h3>
<input type="hidden" name="ps" value="NULL" />
<input type="checkbox" name="ps" value="ps">Public Speaking<br>
<input type="hidden" name="rt" value="NULL" />
<input type="checkbox" name="rt" value="rt">Reporting<br> 
<input type="hidden" name="major" value="<?php echo $major; ?>" />
<br><br><br><br><input type="submit" value="Submit">
</form>

</div>
</div>
</div></div>
<!--==============================footer=================================-->

	
  <?php include 'includes/footer.php'; ?>

</body>
</html>
