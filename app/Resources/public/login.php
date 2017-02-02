<!DOCTYPE html>
<html lang="en">
<head>
	<title>Log In >> Subspace</title>
        <meta name="viewport" CONTENT="width=device-width, initial-scale=1, maximum-scale=1"/>
            <meta name="robots" CONTENT="index,follow"/>

    <link rel="stylesheet" href="css/bootstrap/bootstrap.css" type="text/css" media="screen" /><!--- ./Bootstrap CSS --->
        <script src="https://use.fontawesome.com/af95f059e7.js"></script><!--- ./FontAwesome CDN --->
            <link rel="stylesheet" href="css/sub-base.css" type="text/css" /><!--- ./Base Stylesheet --->

        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900' rel='stylesheet' type='text/css'>

    <link rel="icon" type="image/png" href="img/favicon.png" />
</head>
<body>

	<!-- Header/Navbar -->
				<div class="header">
			    <nav class="navbar navbar-default">
			      <div class="container-fluid">
			        <!-- Left Hand Nav -->
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			          <a class="navbar-brand" href="index.php">SUBSPACE</a>
			        </div>
			        <!-- Right Hand Nav -->
			          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			            <ul class="nav navbar-nav navbar-right">
										<li><a href="index.php">Tour</a></li>
										<li><a href="spaces.php">Spaces</a></li>
			              <li><a href="login.php">Login</a></li>
										<li><a href="signup.php"><span class="sign-up">Sign Up</span></a></li>
			            </ul>
			          </div><!-- /.navbar-collapse -->
			      </div><!-- /.container-fluid -->
			    </nav>
			</div><!-- /.Header/Navbar -->

<!-- Log In Content -->
  <div class="login-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 form-back">

					<form class="form-horizontal form-margin">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="input-group">
                <input type="email" class="form-control" name="login-email" placeholder="Enter your Email" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-check" aria-hidden="true"></i></span>
              </div>
            </div>
						<div class="form-underline"></div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
              <div class="input-group">
                <input type="password" class="form-control" name="login-password" placeholder="Enter your Password" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-check" aria-hidden="true"></i></span>
              </div>
            </div>
						<div class="form-underline"></div>
            <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" checked>Remember Me!
                  </label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-main">Sign In</button>
            </div>
          </form>
					<div class="login-link"><a href="#">Forgotten your Password?</a></div>
					<div class="login-link"><a href="sigup.php">Already have an Account?</a></div>
        </div>
        <div class="col-lg-3"></div>
      </div>
    </div>
  </div>
<!-- /.Log In Content -->

<!--- Javascipt --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
            $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            });
	//Smooth Scroll
		$(function() {
		  $('a[href*="#"]:not([href="#"])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 500);
		        return false;
		      }
		    }
		  });
		});
   </script>
</body>
</html>
