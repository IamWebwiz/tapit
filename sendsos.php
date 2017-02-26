<!DOCTYPE html>
<html lang="en">
<head>
	<title>TAPIT: Send SOS</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="Clevoclick Technologies">
	<meta name="description" content="An emergency notification app">
	<meta name="keywords" content="emergency, notification, tapit">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">

	<!-- Custom Fonts by Font-Awesome -->
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">

</head>
<body>
	<div class="container">
		<br>
		<div align="center">
			<h1 class="header">T <span><img src="assets/images/iWarning.png" width="30px" height="30px"></span> P I T</h1>
			<p class="tagline">Your Emergency Notification App</p>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<font size="6" style="font-family: 'Trebuchet MS','Comic Sans MS',Arial;">SEND SOS</font>
					</div>
					
					<div class="panel-body">
						<!-- Form -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
								<!-- <div class="container"> -->
									<form role="form" class="form-horizontal pull-left" method="post" autocomplete="no" action="#">
										<h2 class="text-primary">Send SOS Message</h2>
										
										<button class="btn btn-default btn-md">
											<i class="glyphicon glyphicon-map-marker"></i> Get Location
										</button>
										<button class="btn btn-primary btn-md">
											<i class="fa fa-camera"></i> Upload Image
										</button>
										<button class="btn btn-danger btn-md">
											<i class="fa fa-film"></i> Upload Video
										</button>
										
										<hr>
										
										<div class="form-group">
											<label for="location" class="control-label col-sm-4">Location</label>
											<div class="col-sm-8">
												<input type="text" name="location" placeholder="House 28, Ede Road, Ile Ife, Osun state" class="form-control">
											</div>
										</div>

										<div class="form-group">
											<label for="location" class="control-label col-sm-4">Message</label>
											<div class="col-sm-8">
												<textarea class="form-control" placeholder="Help!!! Someone just got into an accident now!" rows="6"></textarea>
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-offset-4 col-sm-8">
												<button type="submit" class="btn btn-danger btn-md"><i class="fa fa-send-o"></i> Send</button>
											</div>
										</div>
									</form>
								<!-- </div> -->
							</div>
						</div>
					</div> <!-- /.panel-body -->
					
					<div class="panel-footer">
						<em>TAPIT Emergency Notification App</em>
					</div> <!-- /.panel-footer -->
				</div>
			</div>
		</div>
	</div>

	<style>
		body {
			color: #000;
		}
	</style>

	<!-- Script files -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/npm.js"></script>
</body>
</html>