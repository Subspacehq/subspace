<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Profile | Subspace</title>
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
        <a href="dashboard.php"><li>Dashboard</li></a>
        <a href="bookings.php"><li>Bookings</li></a>
        <a href="listings.php"><li>Listings</li></a>
        <a href="payments.php"><li>Payments</li></a>
        <a href="edit-profile.php"><li><i class="fa fa-circle" aria-hidden="true"></i>Profile</li></a>
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

<!--- Edit Main --->

<div class="welcome-head">
  <div class="container">

<div class="welcome-message">
  <div class="mini-nav">
    <ul>
      <li><a href="#edit">Edit Profile</a></li>
        <span class="divide">|</span>
      <li><a href="#pic">Add Profile Picture</a></li>
        <span class="divide">|</span>
      <li><a href="#pass">Reset Password</a></li>
    </ul>
  </div>
</div>



    <div class="welcome-message" id="edit">
      <!--- Edit Main --->
      <div class="profile-form-container">
      		<div class="profile-form">
            <h3>Update Your profile</h3>
      			<form class="form">
      				<div class="form-group">
      					<input type="text" class="form-control" name="first-name" placeholder="First Name">
      				</div>
      				<div class="form-group">
      					<input type="text" class="form-control" name="last-name" placeholder="Last Name">
      				</div>
      				<div class="form-group">
      					<input type="email" class="form-control" name="Email" placeholder="Email Address">
      				</div>
              <textarea placeholder="Write a short description about yourself..." class="form-control" rows="3"></textarea>
      				<button type="submit" class="btn btn-sub">UPDATE PROFILE</button>
      			</form>
      		</div>
      </div>
    </div>


    <div class="welcome-message" id="pic">
      <!--- Edit Main --->
      <div class="profile-form-container">
      		<div class="profile-form">
            <h3>Add a Profile Picture</h3>
      			<form>
              <div class="form-group">
                <input type="file" id="exampleInputFile">
              </div>
      				<button type="submit" class="btn btn-sub">Upload</button>
      			</form>
      		</div>
      </div>
    </div>


<!--- Reset Password --->

    <div class="welcome-message" id="pass">
      <!--- Edit Main --->
      <div class="profile-form-container">
      		<div class="profile-form">
            <h3>Reset Password</h3>
      			<form>
              <div class="form-group">
      					<input type="password" class="form-control" name="Password" placeholder="Current Password">
      				</div>
              <div class="form-group">
      					<input type="password" class="form-control" name="Password" placeholder="New Password">
      				</div>
              <div class="form-group">
      					<input type="password" class="form-control" name="Password" placeholder="Re-type New Password">
      				</div>
      				<button type="submit" class="btn btn-sub">RESET PASSWORD</button>
      			</form>
      		</div>
      </div>
    </div>

  </div><!-- /.container -->
</div><!-- /.welcome-head-->


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
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});
   </script>

</body>
</html>
