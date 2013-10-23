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

	
	$major =$_POST['ee'].','.$_POST['cpe'].','.$_POST['cs'].','.$_POST['phy'].','.$_POST['chem'].','.$_POST['amath'];
	//$major = array($_POST['ee'],$_POST['cpe'],$_POST['cs'],$_POST['phy'],$_POST['chem'],$_POST['amath']);
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
	<h2 style="color:#000"> Step 2: Select Skills/Areas Of Knowledge </h2>


<div style="float:left; width: 30%; ">
<h3>Programming Skills</h3>
<form action="student_profile_three.php" method ="post" style="float:center">
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
<input type="checkbox" name="sql" value="sql">SQL/MYSQL<br> 
<input type="hidden" name="fortran" value="NULL" />
<input type="checkbox" name="fortran" value="fortran">Fortran<br>
<input type="hidden" name="haskell" value="NULL" />
<input type="checkbox" name="haskell" value="haskell">Haskell<br>
<input type="hidden" name="matlab" value="NULL" />
<input type="checkbox" name="matlab" value="matlab">MATLAB<br>
<input type="hidden" name="objc" value="NULL" />
<input type="checkbox" name="objc" value="objc">Objective-C<br>
<input type="hidden" name="batchs" value="NULL" />
<input type="checkbox" name="batchs" value="batchs">Batch Scripting<br>
<input type="hidden" name="shells" value="NULL" />
<input type="checkbox" name="shells" value="shells">Shell Scripting<br>
<input type="hidden" name="vbasic" value="NULL" />
<input type="checkbox" name="vbasic" value="vbasic">Visual Basic<br>
<input type="hidden" name="lisp" value="NULL" />
<input type="checkbox" name="lisp" value="lisp">Lisp-<br>
<input type="hidden" name="prolog" value="NULL" />
<input type="checkbox" name="prolog" value="prolog">Prolog<br>
<input type="hidden" name="qt" value="NULL" />
<input type="checkbox" name="qt" value="qt">QT<br>
<input type="hidden" name="pascal" value="NULL" />
<input type="checkbox" name="pascal" value="pascal">Pascal<br>
<input type="hidden" name="cobalt" value="NULL" />
<input type="checkbox" name="cobalt" value="cobalt">Cobalt<br> 

<h3>Communication Skills</h3>
<input type="hidden" name="ps" value="NULL" />
<input type="checkbox" name="ps" value="ps">Public Speaking<br>
<input type="hidden" name="rt" value="NULL" />
<input type="checkbox" name="rt" value="rt">Reporting<br> 
<input type="hidden" name="biling" value="NULL" />
<input type="checkbox" name="biling" value="biling">Bilingual<br> 
<input type="hidden" name="tskills" value="NULL" />
<input type="checkbox" name="tskills" value="tskills">Teaching Skills<br> 
</div>

<div style="width:30%; float:left; padding-left: 5%; padding-right: 5%;">
<h3>IDEs</h3>
<input type="hidden" name="netbeans" value="NULL" />
<input type="checkbox" name="netbeans" value="netbeans">Netbeans<br>
<input type="hidden" name="vstudio" value="NULL" />
<input type="checkbox" name="vstudio" value="vstudio">Visual Studio<br>
<input type="hidden" name="eclipse" value="NULL" />
<input type="checkbox" name="eclipse" value="eclipse">Eclipse<br>
<input type="hidden" name="cblocks" value="NULL" />
<input type="checkbox" name="cblocks" value="cblocks">Code Blocks<br>
<input type="hidden" name="rsql" value="NULL" />
<input type="checkbox" name="rsql" value="rsql">RapidSQL<br>
<input type="hidden" name="delphi" value="NULL" />
<input type="checkbox" name="delphi" value="delphi">Delphi<br>
<input type="hidden" name="xcode" value="NULL" />
<input type="checkbox" name="xcode" value="xcode">Xcode<br>
<input type="hidden" name="padre" value="NULL" />
<input type="checkbox" name="padre" value="padre">Padre<br>
<input type="hidden" name="vim" value="NULL" />
<input type="checkbox" name="vim" value="vim">Vim<br>

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

<h3>Physics</h3>
<input type="hidden" name="quantump" value="NULL" />
<input type="checkbox" name="quantump" value="quantump">Quantum Physics<br>
<input type="hidden" name="cmp" value="NULL" />
<input type="checkbox" name="cmp" value="cmp">Condensed Matter Physics<br>
<input type="hidden" name="optics" value="NULL" />
<input type="checkbox" name="optics" value="optics">Optics<br>
<input type="hidden" name="elcmag" value="NULL" />
<input type="checkbox" name="elcmag" value="elcmag">ElectroMagnetism<br>
<input type="hidden" name="thermo" value="NULL" />
<input type="checkbox" name="thermo" value="thermo">Thermodynamics<br>

</div>

<div style="float:left; width:30%; ">

<h3>Software/Hardware</h3>
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

<h3>Applied Math</h3>
<input type="hidden" name="stats" value="NULL" />
<input type="checkbox" name="stats" value="stats">Statistics/Statistical Analysis<br>
<input type="hidden" name="calc" value="NULL" />
<input type="checkbox" name="calc" value="calc">Calculus<br>
<input type="hidden" name="de" value="NULL" />
<input type="checkbox" name="de" value="de">Differential Equations<br>
<input type="hidden" name="lalgebra" value="NULL" />
<input type="checkbox" name="lalgebra" value="lalgebra">Linear Algebra<br>
<input type="hidden" name="actsci" value="NULL" />
<input type="checkbox" name="actsci" value="actsci">Actuarial Science<br>
<input type="hidden" name="acmath" value="NULL" />
<input type="checkbox" name="acmath" value="acmath">Accounting Math<br>

<h3>Chemistry</h3>
<input type="hidden" name="organic" value="NULL" />
<input type="checkbox" name="organic" value="organic">Organic Chemistry<br>
<input type="hidden" name="kinects" value="NULL" />
<input type="checkbox" name="kinects" value="kinects">Kinetics of Chemical Change<br>

<h3>Laboratory Skills</h3>
<input type="hidden" name="solprep" value="NULL" />
<input type="checkbox" name="solprep" value="solprep">Solution Preperation<br>
<input type="hidden" name="reactcomp" value="NULL" />
<input type="checkbox" name="reactcomp" value="reactcomp">Reaction Equations/Computing<br>
<input type="hidden" name="matsynth" value="NULL" />
<input type="checkbox" name="matsynth" value="matsynth">Material Synth.<br>
<input type="hidden" name="devexp" value="NULL" />
<input type="checkbox" name="devexp" value="devexp">Developing Experiments<br>
<input type="hidden" name="matsaftey" value="NULL" />
<input type="checkbox" name="matsaftey" value="matsaftey">Material Saftey<br> 

<input type="hidden" name="check" value="<?php echo $check; ?>" />

<input type="hidden" name="major" value="<?php echo $major; ?>" />
<br><br><input type="submit" value="Submit">
</form>

</div>

</div>
</div></div>
<!--==============================footer=================================-->

	
  <?php include 'includes/footer.php'; ?>

</body>
</html>
