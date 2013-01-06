<!DOCTYPE html>
<html lang="en">
	<head>
	<title>About</title>
	<meta charset="utf-8">
	<link rel="icon" href="http://localhost/dande/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://localhost/dande/img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<link rel="stylesheet" href="http://localhost/dande/css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="http://localhost/dande/css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="http://localhost/dande/css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="http://localhost/dande/css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="http://localhost/dande/css/kwicks-slider.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://localhost/dande/js/jquery.js"></script>
    <script type="text/javascript" src="http://localhost/dande/js/superfish.js"></script>
	<script type="text/javascript" src="http://localhost/dande/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="http://localhost/dande/js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="http://localhost/dande/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="http://localhost/dande/js/jquery.cookie.js"></script>    
	<script type="text/javascript" src="http://localhost/dande/js/touchTouch.jquery.js"></script>
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='http://localhost/dande/js/jquery.preloader.js'></"+"script>");}	</script>

	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }	
		 
     jQuery('.magnifier').touchTouch();			
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		  }); 
				
	</script>

	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="http://localhost/dande/css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="http://localhost/dande/css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
	</head>

	<body>
	
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="brand" href="#">dande</a>
          	<div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
			  <li class="pull-right"><a href="#about">Sign In</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	    <!--<div class="spinner"></div> --> 
<!--============================== header =================================-->
<header class="getting-started-header-fixed">
 	<ul>
 	 <li class="span3 dande-thumbnail-1">
	      	<div class="dande-thumbnail-img-1">
	      	<br><br>
	      		<h3>Getting Started</h3>
	 			</div>
	 			<h5>Dande 101 </h5>
	 			<p>We have provided a few walkthroughs to get you started.</p>
	      	</li>
 		<li class="span3 dande-thumbnail-1">
	      	<div class="dande-thumbnail-img-1">
	 			</div>
	 			<h5>Browse</h5>
	 			<p>Get to know the website. See what everyone has been posting.</p>
	      	</li>
	      	
	      	<li class="span3 dande-thumbnail-1">
	      	<div class="dande-thumbnail-img-1">
	 			</div>
	 			<h5>Browse</h5>
	 			<p>Get to know the website. See what everyone has been posting.</p>
	      	</li>
	      	
	      	<li class="span3 dande-thumbnail-1">
	      	<div class="dande-thumbnail-img-1">
	 			</div>
	 			<h5>Create An Account</h5>
	 			<p>Be able to post. Manage what you can see.</p>
	      	</li>
	      	
	      	<li class="span3 dande-thumbnail-1">
	      	<div class="dande-thumbnail-img-1">
	 			</div>
	 			<h5>Browse</h5>
	 			<p>Get to know the website. See what everyone has been posting.</p>
	      	</li>
 	</ul>
 </header>
<div class="bg-content">
	<?php for ($i=1; $i<=6; $i++) : ?>
	<div class="container">
	<h3>Latest</h3>
	    <div class="dande-row-1">
	    	<div class="span12"> 
	        <!--============================== slider =================================-->
	        	<div class="flexslider">
	            	<ul class="slides">
	             	<?php for ($j=1; $j<=5; $j++) : ?>
	 	 				<li class="span2 dande-thumbnail-2">
		      				<div class="dande-thumbnail-img-2"></div>
		      				<div class="dande-thumbnail-inner-rightnav-1">
		      					<ul>
		      						<li class="dande-thumbnail-title-1">Apple iPhone 4</li>
		      						<li class="dande-thumbnail-price-1">US$40.00</li>
		      						<li class="dande-thumbnail-condition-1">Condition: Like New</li>
		      						<li class="dande-thumbnail-owner-1">by Tremayne Mushayahama</li>
		      					</ul>
		      				</div>
		 					<p>Description: It is a new phone. I want to sell it to get a new iPhone 5</p>
						</li>
		      		<?php endfor  ?>
					</ul>
				</div>
				<span id="responsiveFlag"></span>
			</div>
		</div>
	</div>
	<?php endfor  ?>
</div>

<!--============================== footer =================================-->
<footer>
      <div class="container clearfix">
    <ul class="list-social pull-right">
          <li><a class="icon-1" href="#"></a></li>
          <li><a class="icon-2" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
          <li><a class="icon-4" href="#"></a></li>
        </ul>
    <div class="privacy pull-left">Dande Home designed by Tremayne Mushayahama and James Mapepa</div>
  </div>
    </footer>
<script type="text/javascript" src="http://localhost/dande/js/bootstrap.js"></script>
</body>
</html>