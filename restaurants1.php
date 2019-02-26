<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>SaddaCampus</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

<body>
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.html"> <img class="img-rounded" src="images/logo.png" alt="" width="140"> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link" href="index.html">Home</a> </li>
							<li class="nav-item"> <a class="nav-link" href="myprofile.html">My Profile</a> </li>
							<li class="nav-item"> <a class="nav-link" href="https://play.google.com/store/apps/details?id=com.saddacampus.app">Get The App</a> </li>
							<li class="nav-item"> <a class="nav-link" href="#">SignUp/SignIn</a> </li>
                           </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
                <div class="container">
                <div class="top-links">
		<div class="top-links">
                    <ul class="row links">
                        <li class="col-xs-12 col-sm-3 link-item"><span>1</span><a href="index.html">Choose Your Location</a></li>
                        <li class="col-xs-12 col-sm-3 link-item active"><span>2</span><a href="#">Choose Restaurant</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>3</span><a href="#">Pick Your favorite food</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>4</span><a href="#l">Order and Pay online</a></li>
                    </ul>
                    </div>
                    </div>
                 
                </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="http://placehold.it/1670x480">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <div class="result-show" style="float:right">
                <form class="form-inline">
                    <label class="sr-only" for="exampleInputAmount">Search Restraunt</label>
                    <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputAmount" placeholder="Search Restaurant"> </div>
                    <button onclick="location.href='restaurants.html'" type="button" class="btn theme-btn btn-lg">Search</button>
                </form>
            </div>
            <!-- //results show -->
            <br><section class="restaurants-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-3">
                            <div class="sidebar clearfix m-b-20">
                                <div class="main-block">
                                    <div class="sidebar-title white-txt">
                                        <h6>Choose Cusine</h6> <i class="fa fa-cutlery pull-right"></i> </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control search-field" placeholder="Search your favorite food"> <span class="input-group-btn"> 
                                 <button class="btn btn-secondary search-btn" type="button"><i class="fa fa-search"></i></button> 
                                 </span> </div>
                                    <form>
                                        <ul>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Barbecuing and Grilling</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Appetizers</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Soup and salads</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Seafood</span> </label>
                                            </li>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Beverages</span> </label>
                                            </li>
                                        </ul>
                                    </form>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- end:Sidebar nav -->
                                <div class="widget-delivery">
                                    <form>
                                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                            <label class="custom-control custom-radio">
                                                <input id="radio1" name="radio" type="radio" class="custom-control-input" checked=""> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
                                        </div>
                                        <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                            <label class="custom-control custom-radio">
                                                <input id="radio2" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget clearfix">
                                <!-- /widget heading -->
                                <div class="widget-heading">
                                    <h3 class="widget-title text-dark">
                                 Popular tags
                              </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="widget-body">
                                    <ul class="tags">
									
                                    <li> <a href="#" class="tag">
                                    Deals/Offers
                                    </a> </li><br>
                                        <li> <a href="#" class="tag">
                                    Online Payment
                                    </a> </li><br>
                                        <li> <a href="#" class="tag">
                                    Free Delivery
                                    </a> </li><br>
                                        <li> <a href="#" class="tag">
                                    Min. Order Prize
                                    </a> </li><br>
									<li> <a href="#" class="tag">
                                    Popularity
                                    </a> </li><br>
                                    </ul>
                                </div>
                            </div>
                            <!-- end:Widget -->
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9">
<?php                        
	$servername = "localhost";
    $username = "saddaejd";
    $password = "C@mpusjoy#69";
    $dbname = "saddaejd_sadda";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn){
        die(mysqli_connect_error());
    }
    $cityname = strtolower($_POST['city']);
    $dbtable = "restaurant_".$cityname;
    if($cityname == "dhanbad"){
        $dbtable = "restraunt";
    }
    $dbtable2 = "restaurant_reviews_".$cityname;   
    $sql = "SELECT * FROM ".$dbtable.";";
    $restaurant_list = mysqli_query($conn, $sql);
    if(mysqli_num_rows($restaurant_list) > 0){
    while($row1 = mysqli_fetch_assoc($restaurant_list))
    {   $star_filled = round($row1['rating']);
		$url = str_replace(" ", "", $row1['name']);
		$url_real = strtolower($url);
		$code = $row1['code'];
		$review_sql = "SELECT * FROM ".$dbtable2." WHERE restaurant_code = '".$row1['code']."';";		
		$review_sql_con = mysqli_query($conn, $review_sql);
		$count = mysqli_num_rows($review_sql_con);	
    	echo                  
                       
                           "<div class='bg-gray restaurant-entry'>
                                <div class='row'>
                                    <div class='col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left'>
                                        <div class='entry-logo'>
                                            <a class='img-fluid' href='#'><img src=\"{$row1['image']}\" alt='Food logo'></a>
                                        </div>
                                        <!-- end:Logo -->
                                        <div class='entry-dscr'>
                                            <h5><a href=\"{$url_real}.html\">".$row1['name']."</a></h5>
											<span>Speciality: ".$row1['speciality']."</span><br>
											<span>Discount: ".$row1['restaurant_discount']."</span>
                                            <ul class='list-inline'>
                                                <li class='list-inline-item'>&#9202 ".$row1['timing']."</li>
                                                <li class='list-inline-item'><b>&#8377 </b> Min. Order of INR ".$row1['minfee']."</li>
                                            </ul>
                                        </div>
                                        <!-- end:Entry description -->
                                    </div>
                                    <div class='col-sm-12 col-md-12 col-lg-4 text-xs-center'>
                                        <div class='right-content bg-white'>
                                            <div class='right-review'>
                                                <div class='rating-block'>";
                                            	for ($i=0; $i < $star_filled ; $i++) { 
									            	echo "<i class='fa fa-star'></i>";
									            }  
									            for ($j=0; $j < 5 - $star_filled; $j++) { 
									            	echo "<i class='fa fa-star-o'></i>";
									            }
                                               echo 
                                               "</div> 
                                                <p> ".$count." Reviews</p> <a href=\"{$url_real}.html\" class='btn theme-btn-dash'>View Menu</a> </div>
                                        </div>
                                        <!-- end:right info -->
                                    </div>
                                </div>
                                <!--end:row -->
                            </div>
                            <!-- end:Restaurant entry -->";}}
?>                            
                        </div>
                    </div>
                </div>
            </section>
              </section>
        <!-- How it works block ends -->
        
        <section class="app-section">
            <div class="app-wrap">
                <div class="container">
                    <div class="row text-img-block text-xs-left">
                        <div class="container">
                            <div class="col-xs-12 col-sm-5 right-image text-center">
                                <figure> <img src="images/application.png" alt="Right Image" class="img-fluid"> </figure>
                            </div>
                            <div class="col-xs-12 col-sm-7 left-text">
                                <h3>The Best Food Delivery App</h3>
                                <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery.</p>
                                <div class="social-btns">
                                    <a href="#" class="app-btn apple-button clearfix">
                                        <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                        <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                    </a>
                                    <a href="#" class="app-btn android-button clearfix">
                                        <div class="pull-left"><i class="fa fa-android"></i> </div>
                                        <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- start: FOOTER -->
            <footer class="footer">
                <div class="container">
                    <!-- top footer statrs -->
                    <div class="row top-footer">
                        <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                            <a href="index.html"> <img src="images/logo.png" alt="Footer logo" width="150"></a></div>
                        <div class="col-xs-12 col-sm-9 about color-gray">
                            <h5>Saddacampus as a platform speaks out its mind in form of quality service assurance in the domains of food delivery especially to college students as part of its foray into online service vending to begin with.</h5>
                            
                        </div>
                        
                        
                    </div>
                    <!-- top footer ends -->
					<div class="page-wrapper">
                <div class="container">
                    <ul class="row links">
                        <li class="col-xs-12 col-sm-3"><h5>Connect to Us</h5></li>
                        <li class="col-xs-12 col-sm-3"><span><i class="fa fa-linkedin fa-fw"></i></span><a href="https://www.linkedin.com/company/6607842/">LinkedIn</a></li>
                        <li class="col-xs-12 col-sm-3"><span><i class="fa fa-facebook fa-fw"></i></span><a href="https://www.facebook.com/saddacampus/?ref=aymt_homepage_panell">Facebook</a></li>
                        <li class="col-xs-12 col-sm-3"><span><i class="fa fa-instagram fa-fw"></i></span><a href="https://www.instagram.com/saddacampus/">Instagram</a></li>
                    </ul>
            </div></div>
                    <!-- bottom footer statrs -->
                <hr><div class="row bottom-footer">
                        <div class="container">
                            <div class="row">
								<div class="col-xs-12 col-sm-3 address color-gray">
                                    <h5>Phone</h5><h5><a href="tel:+919523739679">+91- 95237 39679</a></h5>
                                </div>
                                <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5>Address</h5>
                                    <p>1227-ADARSH NAGAR, UIT QTR, HIRAN MANGRI, SECTOR NO. 4,
UDAIPUR,
RAJASTHAN, 313001, INDIA.</p>
                                </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5>Additional informations</h5>
                                    <p>Join the thousands of other restaurants who benefit from having their menus on TakeOff. To partner with us drop us a mail at info@saddacampus.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- bottom footer ends -->
                </div>
            </footer>
            <!-- end:Footer -->
        </div>
    </div>
    <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>