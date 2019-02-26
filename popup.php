
<?php 

  $loginError = NULL;
  if(isset($_POST['login']))
  {
    function validate($formData)
    {
      return trim( stripslashes( htmlspecialchars($formData) ) );
    }
  

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

     $database  = "saddaejd_expansions";
    $server = "localhost";
    $username = "saddaejd";
    $password = "C@mpusjoy#69";


    $conn = mysqli_connect($server,$dbuser,$dbpass,$database);

    if(! $conn)
    {
      die("Connection failed".mysqli_error());
    }


    $query = "SELECT username, password, email FROM `users` WHERE email = '$email'";

    $result = mysqli_query($conn, $query);
    
    if( mysqli_num_rows($result) > 0 )
    {
      while($row = mysqli_fetch_assoc($result))
      {
        $dbusername = $row['username'];
        $dbpassword = $row['password'];
        $dbemail = $row['email'];
      }

      if( password_verify($password , $dbpassword))
      {
        session_start();
        $_SESSION['loginusername'] = $dbusername;
        $_SESSION['loginemail'] = $dbemail;

        // header("Location : profile.php",true);   //Header is not working .... So i used js insetead;

        echo "<script>window.top.location = 'profile.html'</script>";
      }
      else 
      {
        $loginError = "<div class='alert alert-danger'>Wrong username/password combination</div>";
      }
    }
    else
    {
      $loginError = "<div class='alert alert-danger'>Wrong username<a class='close' data-dismiss='alert'>&times;</a></div>";
    }

    mysqli_close($conn);
  }



       $database  = "saddaejd_expansions";
    $server = "localhost";
    $username = "saddaejd";
    $password = "C@mpusjoy#69";


      $conn = mysqli_connect($server,$dbuser,$dbpass,$database);

      if(! $conn)
      {
        die("Connection failed".mysqli_error());
      }

      function validate2($formData){
      return trim( stripslashes( htmlspecialchars($formData) ) );
      }
      $signupError =NULL;
      $signupSuccess = NULL;
      $match_error= NULL;

      $email = NULL;
      $password = NULL;
      $con_password = NULL;


      if(isset($_POST["signup"]))
      {
        
        $email = validate2($_POST["email"]);
        $password = validate2($_POST["password"]);
        $con_password = validate2($_POST["repeat_pass"]);


        if($con_password != $password)
        {
          $match_error = "Passwords don't match";
        }


        if(! $match_error)
        {
          $hashed_password = password_hash($password, PASSWORD_DEFAULT);

          $query = "INSERT INTO `users` ( `password`, `email`, `signup_time`) VALUES ( '$hashed_password','$email', CURRENT_TIMESTAMP)";

          if(mysqli_query($conn, $query))
          {
            $signupSuccess = "<div class='alert alert-success'>Signup Successful</div>";
          }
          else
          {
            echo "Error: ".$query.mysqli_error($conn);
          }
        }
        else
        {
          $signupError = "<div class='alert alert-danger'>$match_error</div>";
        }
        mysqli_close($conn);
        

      }

 ?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  
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
    <link href="css/style.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/popup.css">

  
</head>
<body class="home">
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
<header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.html"> <img class="img-rounded" src="images/logo.png" alt="" width="140"> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link" href="index.html">Home<span class="sr-only"></span></a> </li>
							<li class="nav-item"> <a class="nav-link" href="myprofile.html">My Profile</a> </li>
							<li class="nav-item"> <a class="nav-link" href="https://play.google.com/store/apps/details?id=com.organisation.saddacampus">Get The App</a> </li>
							<li class="nav-item"> <a class="nav-link" href="popup.html">SignUp/SignIn</a> </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
	
  <div class="logmod">
  <div class="logmod__wrapper">
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Login</a></li>
        <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
      </ul>
      <?php echo "$loginError"; ?>
      <?php echo "$signupError" ?>
      <?php echo "$signupSuccess" ?>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your details <strong>to create an acount</strong></span>
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method ="POST" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" id="user-email" placeholder="Email" type="email" name ="email" size="50" required/>
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="text" name ="password" size="50" required/>
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                <input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Repeat password" name ="repeat_pass" type="text" size="50" required/>
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="signup" type="submit" value="Create Account" />
              <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
            </div> 
          </form>
        </div> 
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Facebook</strong></span>
              </div>
            </a>
              
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your email and password <strong>to SignIn</strong></span>
        </div> 
        <div class="logmod__form">
          <form accept-charset="utf-8" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input class="string optional" maxlength="255" id="user-email" placeholder="Email" name="email" type="email" size="50" required/>
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw" >Password*</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" name="password" type="password" size="50" required/>
                						<span class="hide-password">Show</span>
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="login" type="submit" value="Log In" />
              <span class="simform__actions-sidetext"><a class="special" role="link" href="#">Forgot your password?</a></span>
            </div> 
          </form>
        </div> 
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Facebook</strong></span>
              </div>
            </a>
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
          </div>
      </div>
    </div>
  </div>
</div>


</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
    <script src="js/index.js"></script>

</body>
</html>
