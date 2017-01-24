<?php include "base.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | Subspace</title>
        <meta name="viewport" CONTENT="width=device-width, initial-scale=1, maximum-scale=1"/>
            <meta name="robots" CONTENT="index,follow"/>

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" />
        <script src="https://use.fontawesome.com/af95f059e7.js"></script>
            <link rel="stylesheet" href="css/main.css" type="text/css" />

        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900' rel='stylesheet' type='text/css'>


</head>
<body>

	<!--- Header --->

	<div class="homepage-hero-module"  id="top">
		<!-- Header -->
				<div class="header-home">
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
										<li><a href="index.php">LOCATIONS</a></li>
										<li><a href="tour.php">TOUR</a></li>
										<li><a href="pricing.php">PRICING</a></li>
			              <li><a href="login.php">LOGIN</a></li>
										<li><a href="signup.php"><span class="sign-up">SIGN UP</span></a></li>
			            </ul>
			          </div><!-- /.navbar-collapse -->
			      </div><!-- /.container-fluid -->
			    </nav>
			</div>
</div>

<!--- Register --->

<div class="register-form-container">
	<div class="container">

		<div class="register-form">

				<h1>Get Started Today!</h1>

			<form>
				<div class="form-group">
					<input type="text" class="form-control" name="first-name" placeholder="First Name">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="last-name" placeholder="Last Name">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="Email" placeholder="Email Address">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="Password" placeholder="Password">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="Password" placeholder="Re-type Password">
				</div>
				<button type="submit" class="btn btn-sub">CREATE ACCOUNT</button>
			</form>
			<a href="login.php">Already have an account?</a>
		</div>

	</div>
</div>






<!--- Javascipt --->
	<!--- Bootstarp --->
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
