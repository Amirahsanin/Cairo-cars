<?php
session_start();

   if( $_SESSION['login'] !=true )
   {
     header("location:signup.php");
   }


?>





<!DOCTYPE html>
<html lang="en">
<!--  Start Head tag -->
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=" Car Rental and Purchase Services">
  <meta name="author" content="Amir Team">
  <meta name="keyword" content="Car , Rental ,Purchase">
  <title>Cairo Car</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon" sizes="196x196">
  <link href="img/favicon.png" rel="apple-touch-icon" sizes="196x196">
  <link href="img/favicon.png" rel="shortcut icon" >
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
  <style>
  
  .carousel-inner .item img {border-radius: 0px 0px 0 0;max-height:480px;overflow: hidden;}
  
  
  </style>
</head>
<!--  End Head tag -->

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
  
  
  <!--header start-->
    <header class="header black-bg ">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="home.html" class="logo"><b>Cairo<span>Car</span></b></a>
      <!--logo end-->
      <div class="nav notify-row pull-right " id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
		<li id="header_inbox_bar" class="dropdown nav pull-left top-menu" >
            <a  href="My cart.html">
             <i class="fa fa-shopping-cart fa-2x"></i>
              </a>
            
          <!-- settings start -->
		  <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown nav pull-right top-menu" >
		  
            <a data-toggle="dropdown" class="dropdown-toggle" href="home.html#">
              <i class="fa fa-user fa-2x"></i>
              </a>
            <ul class="dropdown-menu extended inbox">
				 <li>
                <a href="Sign up.html">
                  <div class="task-info  desc">Sign Up</div></a>
              </li>

				 <li>
                <a href="login.html">
                  <div class="task-info  desc">Sign in</div></a>
              </li>
	
				 <li> 
                <a href="Edit.html" target="_blank">
                  <div class="task-info  desc">My Profile</div></a>
              </li>
			  
			  
				 </div>		
				 
				 
				




				 
				 
<ul class="breadcrumb content-center" style="text-align:center;">
	  <li><a href="home.html" target="_blank">Home Page</a></li>
	  <li><a href="Purchase.html" target="_blank">Purchase</a></li>
	  <li><a href="Rental.html" target="_blank">Rental</a></li>
	   <li><a href="Contact.html" target="_blank">Contact Us</a></li>
   
		<li>
			<div class="btn-group">
                <div class="btn  btn-primary dropdown-toggle" data-toggle="dropdown">
                  Other Pages <span class="caret"></span>
                  </div>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="Terms.html" target="_blank">Terms</a></li>
                  <li><a href="About Us.html" target="_blank">About Us</a></li>
                  <li><a href="Our Team.html" target="_blank">Our Team</a></li>
                  <li><a href="Cookies.html" target="_blank">Cookie Policy</a></li>
                  <li><a href="privacy policy.html" target="_blank">Privacy</a></li>
                  <li><a href="Faq.html" target="_blank"> Faq</a></li>
                </ul>
              </div>
			 </li>
	   </li>
</ul>  	
</div>
</header>
    <!--header end-->
	
	

    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>
          <li class="mt">
            <a class="active" href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
            </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Tools</span>
            </a>
            <ul class="sub">

              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="todo_list.html">Todo List</a></li>
              <li><a href="file_upload.html">button</a></li>
            </ul>
          </li>


          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>Manage Members</span>
            </a>
            <ul class="sub">
              <li><a href="add.html"> <i class="fa fa-plus"></i> Add </a></li>
              <li><a href="display.html"><i class="fa fa-minus"></i> Edit\Remove </a></li>
            </ul>
          </li>


          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-car"></i>
              <span>Manage Cars</span>
            </a>
            <ul class="sub">
              <li><a href="addCar.html"> <i class="fa fa-plus"></i> Add </a></li>
              <li><a href="displayCar.html"><i class="fa fa-minus"></i> Edit\Remove </a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-list-alt"></i>
              <span>Manage Category</span>
            </a>
            <ul class="sub">
              <li><a href="AddCategory.html"> <i class="fa fa-plus"></i> Add </a></li>
              <li><a href="displayCategory.html"><i class="fa fa-minus"></i> Edit\Remove </a></li>
            </ul>
          </li>



          <li class="sub-menu">
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
            </a>
          </li>




          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
            </a>
            <ul class="sub">
              <li> <a href="morris.html"></a></li>
            </ul>
          </li>


          <li class="sub-menu">
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>

              <span>Google Maps </span>
            </a>
          </li>

          <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    
    
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          
		 
		 
		 
		 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="product-title">
                <h3>kia pegas 2020</h3>
                
                
                <hr>
            </div>
        </div>
    </div>
	<div class="row">
	    <div class="col-md-8">
	        <div id="myCarousel" class="carousel slide" data-interval="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/3.jpg" style="width:100%" class="img-responsive">
      
    </div>
    <div class="item">
      <img src="img/2.jpg" class="img-responsive">
     
    </div>
    <div class="item">
      <img src="img/1.jpg" class="img-responsive">
     
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>
            
	    </div>
		<div class="col-md-4">
                <div class="product-widget ">
                    <ul class="list-group">
                                 <li class="list-group-item"> <span class="badge">Diesel	</span> Model </li>
                                <li class="list-group-item"> <span class="badge">360km </span> Car Speed</li>
                                <li class="list-group-item"> <span class="badge">Automatic</span> Transmission</li>
             
                                <li class="list-group-item"> <span class="badge">4</span>Seats</li>
                                <li class="list-group-item"> <span class="badge">4</span>Doors</li>
                                <li class="list-group-item"> <span class="badge">Yes</span> Luggage </li>
								<li class="list-group-item"> <span class="badge">Yes</span>Air bags </li>
                                <li class="list-group-item"> <span class="badge">No</span> Fuel </li>
                                <li class="list-group-item"> <span class="badge">Yes, Available</span>Gps</li>
                                <li class="list-group-item"> <span class="badge">N/A</span> Mileage</li>
                                
								  <li class="list-group-item"> <span class="badge">N/A</span>Minmum Age </li>
                    </ul>
                </div>
                

             <a href="Payment.html">
              <button type="button" class="btn btn-primary btn-lg" ><i class="fa fa-shopping-cart"></i> Pay Now</button>
           </a>
</div>
                </div>
	</div>
	<hr>
</div>

<div class="container product-detail-area">
<div class="row">
    <div class="col-md-8">
        <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Complete Description</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
          <ul>
              <li>Descrption</li>
              <li>Descrption</li>
              <li>Descrption</li>
              <li>Descrption</li>
              <li>Descrption</li>
              
          </ul>
      </div>
    </div>
  </div>
 
 

</div>
    </div>
     
</div>
            </div>
            <!-- end accordion -->
     
    </section>
	</section>
    <!--main content end-->
    
	
	
	
	
	
	
	
	
	<!-- Footer -->
<footer class="site-footer">
      <div class="text-center">
	  <div class="row">
	 
 <div class="col-xs-2 .col-md-2"></div>
  <!-- Left -->
 <div class="col-xs-2 .col-md-2">
  <h2><b>Help & Information<b></h2>
	  <a  href="Terms.html" target="_blank">Terms & Conditions</a><br>
	  <a  href="Cookies.html" target="_blank">Cookie Policy</a><br>
	  <a  href="Our Team.html" target="_blank">Our Team</a><br>
	  <a  href="About Us.html" target="_blank">About Us</a><br>
	  <a  href="privacy policy.html" target="_blank">Privacy</a><br>
	  <a  href="Faq.html" target="_blank">Faq</a><br>
  </div>
  
 
 <!-- Right -->
  <div class="col-xs-2 .col-md-2">
   <div class="container">
    <div class="row">
      <h2><b>Follow Us<b> </h2>
      <div>
        <ul class="social-network social-circle">
          <li><a href="404.html" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="404.html" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="404.html" target="_blank" class="icoLinkedin" title="whatsapp"><i class="fa fa-whatsapp"></i></a></li><br>
        </ul>
		<br>
		
		<ul class="footer-links">
			<li><a  href="#" target="_blank"><i class="fa fa-map-marker"></i>&nbsp;1st, SHOBRA</a></li>
			<li><a  href="#" target="_blank""><i class="fa fa-phone"></i>&nbsp;+201200629422</a></li>
			<li><a  href="#" target="_blank"><i class="fa fa-envelope-o"></i>&nbsp;CairoCar@email.com</a></li>
			</ul>
		</div>
     </div>
  </div>
 </div>
</div>
	  <br>
	  <br>
        <p>
          &copy; Copyrights <script>document.write(new Date().getFullYear());</script><strong> <a href="Team.html" target="_blank">Our Team</a><br></strong> All Rights Reserved.
        </p>
       <!--go top-->
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
		  <!--go top-->
      </div>
 </footer>
    <!--footer end-->
	

	
	
  </section>
  
  
  
  
    <!-- js  -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>

  <script type="application/javascript">
   
  </script>
  <!-- End Js -->
</body>
<!-- End Body -->
</html>