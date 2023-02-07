	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
		
		<?php
			session_start();
			if (isset($_SESSION['email'])){
							
			} 
			else {
				$_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
				header("Location: login.php");
			}
            include("dbconn.php");
			
			if(isset($_POST['update']));
			{
				$idbooking = $_POST['update']; 
			
			}

				
						

			
		?>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="dashboard.php">Home</a></li>
				          <li><a href="about.php">About</a></li>
				          <li><a href="cars.php">Cars</a></li>
				          <li><a href="brands.php">Brands</a></li>
				          <li><a href="team.php">Team</a></li>		
				          <li><a href="contact.php">Contact</a></li>	
				          <li class="menu-has-children">
				            <?php 
							if (isset($_SESSION['email']) === true){
								
									echo"
									<a href='#a'>".$_SESSION['email']."</a>
									<ul>
									<li><a href='record.php'><img  src='img/board.png' alt='' width='10%' height='13'> Bookings</a></li>
									<li><a href='register.php'><img  src='img/user.png' alt='' width='10%' height='13'> Profile Settings</a></li>
									<li><a href='logout.php'><img  src='img/logout.png' alt='' width='10%' height='13'> Sign Out</a></li>
									</ul>";
							} 
							else {
								echo"
									<a href='#a'>Sign Up</a>
									<ul>
									<li><a href='login.php'><img  src='img/sign-in.png' alt='' width='10%' height='13'> Sign In</a></li>
									<li><a href='register.php'><img  src='img/new-user.png' alt='' width='10%' height='13'> Register</a></li>
									</ul>";
							}
							?>
				          </li>			          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header>
			  <!-- #header -->
			  
			 

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Elements				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> Elements</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			
			
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
				
				   <div id="page-wrapper">
                <div class="col-lg-16">

                    <br>
                        <!-- /.panel-heading -->
                <div class="row">
                    <div class="col-lg-16">
                        <div class="panel panel-success">
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th><center>Booking ID</th>
                                                <th><center>Location <br> &nbsp;&nbsp;</th>
												<th><center>Pick Up Time</th>
												<th><center>Pick Session</th>
												<th><center>Drop Off Time</th>
												<th><center>Drop Session</th>
												<th><center>Pick Up Date</th>
												<th><center>Drop Off Date</th>
												<th><center></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
					
					 <?php
					 
                    $sql = "SELECT * FROM booking where idbooking = '$idbooking'";
                    $query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
                    $row = mysqli_num_rows($query); 
					
					
					
                    if($row != 0) {
                        while($ro = mysqli_fetch_assoc($query))
						{
							

						echo"<tr>";


						echo "<td><center>".$ro['location']."</td>";
						echo "<input type='text' style='display:none' name='location' value='".$r['location']."'>";
						echo "<td><center>".$ro['picktime']."</td>";
						echo "<input type='time' style='display:none' name='picktime' value='".$r['picktime']."'>";
						echo "<td><center>".$ro['picksession']."</td>";
						echo "<input type='time' style='display:none' name='picksession' value='".$r['picksession']."'>";
						echo "<td><center>".$ro['droptime']."</td>";
						echo "<input type='time' style='display:none' name='droptime' value='".$r['droptime']."'>";
						echo "<td><center>".$ro['dropsession']."</td>";
						echo "<input type='text' style='display:none' name='dropsession' value='".$r['dropsession']."'>";
						echo "<td><center>".$ro['pickdate']."</td>";
						echo "<input type='date' style='display:none' name='pickupdate' value='".$r['pickdate']."'>";
						echo "<td><center>".$ro['dropdate']."</td>";
						echo "<input type='date' style='display:none' name='dropdate' value='".$r['dropdate']."'>";
						echo "<td><form method='POST'><button type='submit' name='delete' value=".$r['idbooking']." formaction='deleteprocess.php' class='btn btn-danger'>&nbsp;&nbsp;Delete &nbsp;</button></form><button type='submit' name='update' value=".$ro['idbooking']." formaction='updateprocess.php' class='btn btn-primary'>&nbsp;&nbsp;Update </button></form></td>";
						echo "</tr>";
							}
							} ?>
					                      </tbody>
 </table>

                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

					
					
					
					
				</div>
			</div>
			<!-- End Align Area -->

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Quick links</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Features</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Resources</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>												
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>	
						<p class="mt-50 mx-auto footer-text col-lg-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>											
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>
