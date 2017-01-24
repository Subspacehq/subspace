<!DOCTYPE html>
<html lang="en">
<head>
	<title>Locations | Subspace</title>
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
										<li><a href="index.php"><span class="active-link">LOCATIONS</span></a></li>
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

<!--- Main Content --->
<div class="map-content">

	<!--- Search Box --->
		<div class="col-lg-6">

					<div class="search-box">
						<form class="form-inline">
							  <div class="form-group">
									<label for="exampleInputName2">FIND A SPACE</label>
							    <input type="searh" class="form-control" id="exampleInputName2" placeholder="Enter a Town, City or Postcode">
								</div>
							  <a type="submit" class="pull-right">Search</a>
						</form>
					</div>

				<div class="col-lg-12 space-tile-area">


					<div class="space-tile col-lg-12">
							<div class="space-img col-lg-6"><img src="img/spaces/1.jpg" /></div>
							<div class="space-info col-lg-6">
								<h4 class="pull-left">West Street Office</h4>
								<p class="pull-right guest-icon"><i class="fa fa-user" aria-hidden="true"></i> 12</p>
								<p class="address">3 West Terrace London W2 6AG</p>
								<p class="space-price">Hot Desks from £30</p>
								<p class="space-price">Meeting Rooms from £50</p>
								<a class="pull-right" href="#">BOOK TODAY</a>
							</div>
					</div>


					<div class="space-tile col-lg-12">
							<div class="space-img col-lg-6"><img src="img/spaces/2.jpg" /></div>
							<div class="space-info col-lg-6">
								<h4 class="pull-left">East Street Office</h4>
								<p class="pull-right guest-icon"><i class="fa fa-user" aria-hidden="true"></i> 4</p>
								<p class="address">12 East Terrace London W2 6AG</p>
								<p class="space-price">Hot Desks from £50</p>
								<p class="space-price">Meeting Rooms from £70</p>
								<a class="pull-right" href="#">BOOK TODAY</a>
							</div>
					</div>


					<div class="space-tile col-lg-12">
							<div class="space-img col-lg-6"><img src="img/spaces/3.jpg" /></div>
							<div class="space-info col-lg-6">
								<h4 class="pull-left">North Street Office</h4>
								<p class="pull-right guest-icon"><i class="fa fa-user" aria-hidden="true"></i> 6</p>
								<p class="address">6A North Terrace London W2 6AG</p>
								<p class="space-price">Hot Desks from £20</p>
								<p class="space-price">Meeting Rooms from £50</p>
								<a class="pull-right" href="#">BOOK TODAY</a>
							</div>
					</div>


					<div class="space-tile col-lg-12">
							<div class="space-img col-lg-6"><img src="img/spaces/4.jpg" /></div>
							<div class="space-info col-lg-6">
								<h4 class="pull-left">South Street Office</h4>
								<p class="pull-right guest-icon"><i class="fa fa-user" aria-hidden="true"></i> 8</p>
								<p class="address">25 South Terrace London W2 6AG</p>
								<p class="space-price">Hot Desks from £50</p>
								<p class="space-price">Meeting Rooms from £50</p>
								<a class="pull-right" href="#">BOOK TODAY</a>
							</div>
					</div>
				</div>


		</div>

		<!--- Map --->
			<div class="col-lg-6"><div class="main-map" id="map"></div></div>

</div> <!--- /.Main Content --->

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

<!--- Maps Script --->
	 <script>
	       function initMap() {

	         var map = new google.maps.Map(document.getElementById('map'), {
	           zoom: 15,
	           center: {lat: -33.848588, lng: 151.209834}
	         });

	         // Create an array of alphabetical characters used to label the markers.
	         var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

	         // Add some markers to the map.
	         // Note: The code uses the JavaScript Array.prototype.map() method to
	         // create an array of markers based on a given "locations" array.
	         // The map() method here has nothing to do with the Google Maps API.
	         var markers = locations.map(function(location, i) {
	           return new google.maps.Marker({
	             position: location,
	             label: labels[i % labels.length]
	           });
	         });

	         // Add a marker clusterer to manage the markers.
	         var markerCluster = new MarkerClusterer(map, markers,
	             {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
	       }
	       var locations = [
	         {lat: -31.563910, lng: 147.154312},
	         {lat: -33.718234, lng: 150.363181},
	         {lat: -33.727111, lng: 150.371124},
	         {lat: -33.848588, lng: 151.209834},
	         {lat: -33.851702, lng: 151.216968},
	         {lat: -34.671264, lng: 150.863657},
	         {lat: -35.304724, lng: 148.662905},
	         {lat: -36.817685, lng: 175.699196},
	         {lat: -36.828611, lng: 175.790222},
	         {lat: -37.750000, lng: 145.116667},
	         {lat: -37.759859, lng: 145.128708},
	         {lat: -37.765015, lng: 145.133858},
	         {lat: -37.770104, lng: 145.143299},
	         {lat: -37.773700, lng: 145.145187},
	         {lat: -37.774785, lng: 145.137978},
	         {lat: -37.819616, lng: 144.968119},
	         {lat: -38.330766, lng: 144.695692},
	         {lat: -39.927193, lng: 175.053218},
	         {lat: -41.330162, lng: 174.865694},
	         {lat: -42.734358, lng: 147.439506},
	         {lat: -42.734358, lng: 147.501315},
	         {lat: -42.735258, lng: 147.438000},
	         {lat: -43.999792, lng: 170.463352}
	       ]
	     </script>
	     <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
	     </script>
	     <script async defer
	     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtabLisVPN2_s42ZXjFPu7t4sw4FvsoBg&callback=initMap">
	     </script>
</body>
</html>
