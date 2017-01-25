<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard | Subspace</title>
        <meta name="viewport" CONTENT="width=device-width, initial-scale=1, maximum-scale=1"/>
            <meta name="robots" CONTENT="index,follow"/>

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen" />
        <script src="https://use.fontawesome.com/af95f059e7.js"></script>
            <link rel="stylesheet" href="css/main.css" type="text/css" />

        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900' rel='stylesheet' type='text/css'>

    <link rel="icon" type="image/png" href="img/favicon.png" />
</head>
<body>

<!--- Header --->
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
			              <li><a href="listings.php">HOST</a></li>
										<li><a href="listings.php"><span class="active-link">ACCOUNT</span></a></li>
			            </ul>
			          </div><!-- /.navbar-collapse -->
			      </div><!-- /.container-fluid -->
			    </nav>
			</div>

<!--- Sub-header --->

<div class="dash-head">
  <div class="container-fluid">
    <div class="pull-left">
      <ul>
        <a href="dashboard.php"><li><i class="fa fa-circle" aria-hidden="true"></i>Dashboard</li></a>
        <a href="bookings.php"><li>Bookings</li></a>
        <a href="listings.php"><li>Listings</li></a>
        <a href="payments.php"><li>Payments</li></a>
        <a href="edit-profile.php"><li>Profile</li></a>
      </ul>
    </div>
    <div class="pull-right">
      <ul>
        <a href="dashboard.php"><li>Settings</li></a>
        <a href="logout.php"><li>Logout</li></a>
      </ul>
    </div>
  </div>
</div>

<!--- Welcome-header --->

<div class="welcome-head">
  <div class="container">
    <div class="welcome-message">Welcome, Hugh! <span class="welcome-tip pull-right"><i class="fa fa-info-circle" aria-hidden="true"></i> View your recent activity and access useful tools<span></div>
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
