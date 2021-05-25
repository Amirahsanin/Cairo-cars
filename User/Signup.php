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
	 
		 <div class="row content-panel">
		<div id="signup-page">
    <div class="container"> 
	<form class=" form-signup cmxform form-horizontal style-form" id="signupForm" method="post" action="handel-reg.php">
    
        <h2 class="form-signup-heading">sign Up now</h2>
		
        <div class="signup-wrap">
           <div class="form-panel">
		 
             
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Firstname</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="firstname" type="text" Required pattern="^[a-zA-Z_]*${4,25}"/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Lastname</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="lastname" type="text" Required pattern="^[a-zA-Z_]*${4,25}" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Username</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="username" type="text" Required pattern="^[a-zA-Z1-9_]*${4,25}" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Password</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="password" type="password" Required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="confirm_password"  Required type="password" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="email" type="email" Required />
                    </div>
                  </div>
                    <div class="form-group">
                        <label for=" Date of Birth" class="control-label col-lg-2">Date of Birth</label>
                        <div class="col-lg-10">
                        <input class="form-control" id="date of birth" name="date-of-birth" type="date" Required />
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label col-lg-2">Address</label>
                        <div class="col-lg-10">
                            <input class="form-control" id="address" name="address" type="text" Required />
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="national id" class="control-label col-lg-2">National ID</label>
                        <div class="col-lg-10">
                            <input class="form-control" id="national id" name="national-id" type="number" Required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="control-label col-lg-2">Phone</label>
                        <div class="col-lg-10">
                            <input class="form-control" id="phone" name="phone" type="number" Required />                       
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="zip/psotol code" class="control-label col-lg-2">Zip/Postol Code</label>
                        <div class="col-lg-10">
                            <input class="form-control" id="zip/postol code" name="zip/postol code" type="number"  Required/>
                        </div>
                    </div>
                  <div class="form-group ">
                    <label for="agree" class="control-label col-lg-2 col-sm-3">Agree to Our Policy</label>
                    <div class="col-lg-10 col-sm-9">
                      <input type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" Required />
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                       <h2 class="centered"><button class="btn bg-primary text-white" type="submit" style="background-color:#007bff" name="islogin">Sign Up</button></h2>
                        
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
       


	   <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabhome="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                
                <h2 class="centered"> <button class="btn btn-theme" type="button"style=background-color:#007bff> Submit</button></h2>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
    
      </form>
	  
    </div>
  </div>
		
    </div>
  </div>
  
	</section>
	</section>
	 
 
		
		
		
	
	
	
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
			<li><a  href="mailto: " target="_blank"><i class="fa fa-envelope-o"></i>&nbsp;CairoCar@email.com</a></li>
			</ul>
		</div>
     </div>
  </div>
 </div>
</div>
	  <br>
	  <br>
        <p>
          &copy; Copyrights <script>document.write(new Date().getFullYear());</script><strong> <a href="Our Team.html" target="_blank">Our Team</a><br></strong> All Rights Reserved.
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